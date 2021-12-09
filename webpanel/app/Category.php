<?php

namespace App;

use App\Traits\HasTranslatableCustom;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Sluggable\SlugOptions;
use App\Traits\HasTranslationsSlug;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasTranslatableSlug;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use NodeTrait, HasTranslatableCustom, HasTranslations, HasTranslatableSlug;

    public $translatable = ['title', 'slug'];

    protected $fillable = ['title', 'slug', 'image', 'header_image', 'parent_id'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
