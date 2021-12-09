<?php

namespace App;

use Spatie\Sluggable\SlugOptions;
use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasTranslatableSlug;

class HomeProduct extends Model
{
    use HasTranslatableCustom, HasTranslations, HasTranslatableSlug;

    public $translatable = [
        'title', 'slug', 'subtitle', 'content', 'button_text', 'button_link'
    ];

    protected $fillable = [
        'title', 'slug', 'subtitle', 'content', 'image', 'image_position', 'button_text', 'button_link'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
