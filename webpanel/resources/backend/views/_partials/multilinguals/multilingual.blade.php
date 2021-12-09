<span class="badge badge-primary text-upper js-language-label"></span>
<input
    type="hidden"
    data-i18n="true"
    name="{{ $attribute }}_i18n"
    id="{{ $attribute }}_i18n"
    @isset($model)
        value="{{ old("{$attribute}_i18n", $model->getTranslationsByJson($attribute)) }}"
    @else
        value="{{ old("{$attribute}_i18n") }}"
    @endisset
    @if(isset($disabled) && $disabled)
        disabled
    @endif
>
