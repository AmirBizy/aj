<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function translations()
    {
        return $this->hasMany(ContentTranslation::class);
    }

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        $translation = $this->translations->firstWhere(function ($t) use ($field, $locale) {
            return $t->field === $field && $t->locale === $locale;
        });

        // اطمینان از اینکه مقدار برگشتی رشته است
        if (!$translation) {
            return '';
        }

        return is_array($translation->value) ? json_encode($translation->value) : $translation->value;
    }

    public function setTranslation($field, $value, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        $this->translations()->updateOrCreate(
            ['locale' => $locale, 'field' => $field],
            ['value' => $value]
        );
    }
}
