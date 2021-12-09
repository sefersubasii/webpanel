<input
    type="hidden"
    data-i18n="true"
    name="{{ $attribute.$model->id }}_i18n"
    id="{{ $attribute.$model->id }}_i18n"
    value="{{ $model->getTranslationsByJson($attribute) }}"
>
<span>{{ $model->{$attribute} ?? '' }}</span>
