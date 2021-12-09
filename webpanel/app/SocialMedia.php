<?php

namespace App;

use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SocialMedia extends Model
{
    use HasTranslatableCustom, HasTranslations;

    public $translatable = ['link'];

    protected $fillable = ['title', 'link', 'icon'];
}
