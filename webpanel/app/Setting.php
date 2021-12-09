<?php

namespace App;

use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslatableCustom, HasTranslations;

    public $translatable = ['value'];

    protected $fillable = ['name', 'type', 'key', 'value'];

    protected $casts = [
        'is_translatable' => 'boolean'
    ];
}
