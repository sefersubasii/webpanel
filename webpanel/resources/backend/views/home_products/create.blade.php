@extends('master')

@section('title', 'Anasayfa Ürün: Ekle')

@section('list-button', route('home-products.index'))

@section('content')
<form class="form" role="form" action="{{ route('home-products.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title'])
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>Alt Başlık</label>
            @multilingual(['attribute' => 'subtitle'])
            <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
        </div>

        <div class="form-group">
            <label>Buton Yazısı</label>
            @multilingual(['attribute' => 'button_text'])
            <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
        </div>

        <div class="form-group">
            <label>Buton Linki</label>
            @multilingual(['attribute' => 'button_link'])
            <input type="text" class="form-control" name="button_link" value="{{ old('button_link') }}">
        </div>

        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content'])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content') }}
            </textarea>
        </div>

        <div class="form-group">
            <label>Resim Pozisyonu</label>
            <select name="image_position" class="form-control">
                <option value="left">SOL</option>
                <option value="right">SAĞ</option>
            </select>
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
