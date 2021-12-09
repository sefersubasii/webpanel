@extends('master')

@section('title', 'Slider Ekle')

@section('list-button', route('sliders.index'))

@section('content')
<form class="form" role="form" action="{{ route('sliders.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title'])
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>Link</label>
            @multilingual(['attribute' => 'link'])
            <input type="text" class="form-control" name="link" value="{{ old('link') }}">
        </div>

        <div class="form-group">
            <label for="chooseImage">Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseImage" accept="image/*" name="image">
                    <label class="custom-file-label" for="chooseImage">Resim seç</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="chooseImage">Mobil Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseMobileImage" accept="image/*" name="mobile_image">
                    <label class="custom-file-label" for="chooseMobileImage">Resim seç</label>
                </div>
            </div>
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
