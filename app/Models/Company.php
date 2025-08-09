<?php

namespace App\Models;

use App\Models\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    use HasTranslations;
    protected $guarded = [];

    protected static function booted()
    {
        static::deleting(function ($company) {
            // گرفتن همه ترجمه‌ها با کوئری
            $translations = $company->translations()->get();

            foreach ($translations as $translation) {
                $fullPath = public_path($translation->value);
                if ($translation->value && File::exists($fullPath)) {
                    File::delete($fullPath);
                }
            }

            // حذف رکوردهای ترجمه
            $company->translations()->delete();
        });
    }
}
