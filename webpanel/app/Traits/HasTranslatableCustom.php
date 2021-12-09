<?php

namespace App\Traits;

use Illuminate\Http\Request;

/**
 * Translatable Custom
 */
trait HasTranslatableCustom
{
    public static function bootHasTranslatableCustom()
    {
        static::saving(function ($model) {
            $model->saveTranslations();
        });
    }

    /**
     * Save translation data
     *
     * @return void
     */
    public function saveTranslations()
    {
        $transFields = $this->getTranslatableAttributes();

        foreach ($transFields as $field) {
            if (!request()->input($field . '_i18n')) {
                continue;
            }

            $this->attributes[$field] = request()->input($field . '_i18n');
        }
    }

    public function getTranslationsByJson($attribute)
    {
        return json_encode($this->getTranslations($attribute));
    }
}
