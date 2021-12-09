@extends('master')

@section('title', 'Slider Düzenle')

@section('add-button', route('sliders.create'))
@section('list-button', route('sliders.index'))

@section('content')
<form class="form" role="form" action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title', 'model' => $slider])
            <input type="text" class="form-control" name="title" value="{{ old('title', $slider->title) }}">
        </div>

        <div class="form-group">
            <label>Link</label>
            @multilingual(['attribute' => 'link', 'model' => $slider])
            <input type="text" class="form-control" name="link" value="{{ old('link', $slider->link) }}">
        </div>

        <div class="form-group">
            <label for="chooseImage">Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseImage" accept="image/*" name="image">
                    <label class="custom-file-label" for="chooseImage">Resim seç</label>
                </div>
            </div>
            <img class="img-preview" src="{{ asset($slider->image) }}" alt="">
        </div>

        <div class="form-group">
            <label for="chooseImage">Mobile Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseMobileImage" accept="image/*" name="mobile_image">
                    <label class="custom-file-label" for="chooseMobileImage">Resim seç</label>
                </div>
            </div>
            <img class="img-preview" src="{{ asset($slider->mobile_image) }}">
        </div>
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
