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
}
