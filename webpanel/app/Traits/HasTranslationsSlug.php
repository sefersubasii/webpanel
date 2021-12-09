<?php

namespace App\Traits;

use Str;
use Illuminate\Database\Eloquent\Builder;

trait HasTranslationsSlug
{
    protected $uniqueSlug = true;
    protected $uniqueSeperator = '-';

    public static function bootHasTranslationsSlug()
    {
        static::saving(function ($model) {
            $model->attributes['slug'] = $model->generateSlug();
        });
    }

    protected function generateSlug(): string
    {
        $slugs = [];

        $sourceColumn = $this->slugSource();

        foreach ($this->getTranslatedLocales($sourceColumn) as $locale) {
            $translatedValue = $this->getTranslation($sourceColumn, $locale);

            if ($this->uniqueSlug) {
                $slugs[$locale] = $this->createUniqueSlug($translatedValue, $locale);
            } else {
                $slugs[$locale] = $this->createSlug($translatedValue);
            }
        }

        return json_encode($slugs);
    }

    protected function createSlug($source): string
    {
        return Str::slug($source);
    }

    protected function createUniqueSlug($translatedValue, $locale): string
    {
        $slug = $this->createSlug($translatedValue);

        $slugCount = $this->newQuery()
            ->findSimilarSlugs('slug->' . $locale, $slug)
            ->count();

        if ($slugCount > 1) {
            return $slug . $this->uniqueSeperator . ($slugCount - 1);
        }

        return $slug;
    }

    public function scopeFindSimilarSlugs(Builder $query, string $attribute, string $slug): Builder
    {
        return $query->where(function (Builder $q) use ($attribute, $slug) {
            $q->where($attribute, '=', $slug)
                ->orWhere($attribute, 'LIKE', $slug . $this->uniqueSeperator . '%');
        });
    }


    abstract public function slugSource(): string;
}
