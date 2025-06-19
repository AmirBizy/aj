<?php

namespace App\Models\Traits;

use App\Models\Translation;
use Illuminate\Support\Arr;

trait HasTranslations
{
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    public function getTranslation(string $key, string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->translations->where('key', $key)->where('locale', $locale)->first()?->value;
    }

    // set and create with multi lang
    public function setTranslation(string $key, mixed $value, string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        // اگر مقدار فایل بود
        if ($value instanceof \Illuminate\Http\UploadedFile) {
            $filePath = $value->store("translations/{$this->getTable()}/{$key}/{$locale}", 'public');

            $this->translations()->updateOrCreate(
                ['key' => $key, 'locale' => $locale],
                ['value' => $filePath]
            );
        } else {
            // مقدار متنی
            $this->translations()->updateOrCreate(
                ['key' => $key, 'locale' => $locale],
                ['value' => $value]
            );
        }
    }

    // update with multi lang
    public function translateArray(array $data, string $locale)
    {
        foreach ($this->translatableFields ?? [] as $field) {
            if (isset($data[$field])) {
                $this->setTranslation($field, $data[$field], $locale);
            }
        }
    }
}
