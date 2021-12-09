<?php

namespace App;

use Kalnoy\Nestedset\NodeTrait;
use Spatie\Sluggable\SlugOptions;
use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasTranslatableSlug;

class Page extends Model
{
    use NodeTrait, HasTranslatableCustom, HasTranslations, HasTranslatableSlug;

    public $translatable = ['title', 'slug', 'content'];

    protected $fillable = ['title', 'slug', 'content', 'parent_id'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getUrlAttribute()
    {
        return route('frontend.corporate.show', $this->slug);
    }
}
