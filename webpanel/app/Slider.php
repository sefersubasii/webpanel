<?php

namespace App;

use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasTranslatableCustom, HasTranslations;

    public $translatable = ['title', 'link'];

    protected $fillable = ['title', 'image', 'mobile_image', 'link'];
}
