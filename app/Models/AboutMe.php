<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasTranslations;

class AboutMe extends Model
{
    use HasTranslations;

    protected $table = 'about_me';
    protected $guarded = [];
    public array $translatableFields = ['title', 'btn_title', 'resume', 'image', 'content'];

    public function getOrderedTranslatableFields(): array
    {
        return [
            'title' => 'عنوان',
            'btn_title' => 'متن دکمه',
            'resume' => 'فایل رزومه',
            'image' => 'تصویر',
            'content' => 'محتوا',
        ];
    }

    public function getFieldTypes(): array
    {
        return [
            'title' => 'text',
            'btn_title' => 'text',
            'resume' => 'file',
            'image' => 'file',
            'content' => 'textarea',
        ];
    }
}
