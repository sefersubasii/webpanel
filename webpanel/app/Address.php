<?php

namespace App;

use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Address extends Model
{
    use HasTranslatableCustom, HasTranslations;

    public $translatable = ['title'];


    protected $fillable = ['title', 'email', 'phone', 'fax', 'address', 'map'];
}
