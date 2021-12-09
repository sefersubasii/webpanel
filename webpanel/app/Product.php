<?php

namespace App;

use App\Casts\JsonCast;
use Spatie\Sluggable\SlugOptions;
use App\Traits\HasTranslatableCustom;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasTranslatableSlug;

class Product extends Model
{
    use HasTranslatableCustom, HasTranslations, HasTranslatableSlug;

    public $translatable = ['name', 'slug', 'content'];

    protected $fillable = ['name', 'slug', 'barcode', 'content', 'image', 'gram', 'category_id'];

    protected $casts = [
        'gram' => JsonCast::class,

    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getProdcutTypesSlug($id)
    {
        return ProductType::find($id)->pluck('slug')->implode(' ');
    }
}
