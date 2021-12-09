@extends('master')

@section('title', 'Ayarlar')

@section('content')
<form class="form" role="form" action="{{ route('settings.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        @foreach ($settings as $setting)
            <div class="form-group">
                <label>{{ $setting->name }}</label>

                @if($setting->is_translatable)
                    <span class="badge badge-primary text-upper js-language-label"></span>
                    <input
                        type="hidden"
                        data-i18n="true"
                        name="{{ $setting->key }}_i18n"
                        id="{{ $setting->key }}_i18n"
                        value="{{ old("{$setting->key}_i18n", $setting->getTranslationsByJson('value')) }}"
                    >
                @endif

                @if($setting->type === 'input')
                    <input type="text" class="form-control" name="{{ $setting->key }}" value="{{ $setting->value }}">
                @elseif($setting->type === 'textarea')
                    <textarea name="{{ $setting->key }}" rows="7" class="form-control">{{ $setting->value }}</textarea>
                @elseif($setting->type === 'image')
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="chooseImage" name="{{ $setting->key }}">
                            <label class="custom-file-label" for="chooseImage">Resim seç</label>
                        </div>
                    </div>
                    @if($setting->value)
                        <div class="img-preview position-relative">
                            <a href="{{ route('settings.delete_file', $setting->key) }}" class="btn btn-sm btn-danger position-absolute" style="right: 3px; top: 3px;">
                                <i class="fas fa-trash"></i>
                            </a>
                            <img style="width:200px; height: 200px" src="{{ asset($setting->value) }}">
                        </div>
                    @endif
                @elseif($setting->type === 'file')
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="chooseFile" name="{{ $setting->key }}">
                            <label class="custom-file-label" for="chooseFile">Dosya seç</label>
                        </div>
                    </div>
                    @if($setting->value)
                        <div class="py-2">
                            <a href="{{ asset($setting->value) }}" download="{{ basename($setting->value) }}">{{ basename($setting->value) }}</a>
                            <a href="{{ route('settings.delete_file', $setting->key) }}" class="btn btn-xs btn-danger" style="right: 3px; top: 3px;">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        @endforeach
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Gönder</button>
    </div>
</form>
@endsection

@push('js')
<script>
    multilingual(true);
</script>
@endpush
