<?php

namespace App\Models;
use App\Models\Traits\HasTranslations;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasTranslations;

    protected $table = 'setting';
    protected $guarded = [];
    public array $translatableFields = ['title', 'btn_title', 'resume', 'image', 'content'];

    public function workStatus($status, $lang = 'en')
    {
        $statuses = [
            'available_for_full_time' => [
                'fa' => 'در دسترس برای همکاری تمام‌وقت',
                'en' => 'Available for full-time work',
                'color' => '#2ecc71', // سبز
            ],
            'available_for_part_time' => [
                'fa' => 'در حال حاضر فقط برای پروژه‌های پاره‌وقت در دسترس هستم',
                'en' => 'Currently available for part-time projects',
                'color' => '#FBBF24', // زرد
            ],
            'not_available_engaged_in_an_active_role' => [
                'fa' => 'در حال حاضر در یک همکاری فعال هستم',
                'en' => 'Currently not available – engaged in an active role',
                'color' => '#EF4444', // قرمز
            ],
            'soon_available' => [
                'fa' => 'به‌زودی در دسترس برای فرصت‌های جدید',
                'en' => 'Soon available for new opportunities',
                'color' => '#3B82F6', // آبی
            ],
            'available_for_remote' => [
                'fa' => 'در حال حاضر فقط برای همکاری به‌صورت دورکاری در دسترس هستم',
                'en' => 'Available for remote work only',
                'color' => '#8B5CF6', // بنفش
            ],
            'not_accepting_new_projects_at_the_moment' => [
                'fa' => 'فعلا پروژه جدیدی نمی‌پذیرم',
                'en' => 'Not accepting new projects at the moment',
                'color' => '#6B7280', // خاکستری
            ],
        ];

        return $statuses[$status] ?? null;
    }

}
