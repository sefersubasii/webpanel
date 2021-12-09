@extends('master')

@section('title', 'Anasayfa Ürün: Düzenle')

@section('add-button', route('home-products.create'))
@section('list-button', route('home-products.index'))

@section('content')
<form class="form" role="form" action="{{ route('home-products.update', $homeProduct->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title', 'model' => $homeProduct])
            <input type="text" class="form-control" name="title" value="{{ old('title', $homeProduct->title) }}">
        </div>

        <div class="form-group">
            <label>Alt Başlık</label>
            @multilingual(['attribute' => 'subtitle', 'model' => $homeProduct])
            <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle', $homeProduct->subtitle) }}">
        </div>

        <div class="form-group">
            <label>Buton Yazısı</label>
            @multilingual(['attribute' => 'button_text', 'model' => $homeProduct])
            <input type="text" class="form-control" name="button_text" value="{{ old('button_text', $homeProduct->button_text) }}">
        </div>

        <div class="form-group">
            <label>Buton Linki</label>
            @multilingual(['attribute' => 'button_link', 'model' => $homeProduct])
            <input type="text" class="form-control" name="button_link" value="{{ old('button_link', $homeProduct->button_link) }}">
        </div>
        
        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content', 'model' => $homeProduct])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content', $homeProduct->content) }}
            </textarea>
        </div>

        <div class="form-group">
            <label>Resim Pozisyonu</label>
            <select name="image_position" class="form-control">
                <option {{ isSelected($homeProduct->image_position, 'left') }} value="left">SOL</option>
                <option {{ isSelected($homeProduct->image_position, 'right') }} value="right">SAĞ</option>
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
            <img class="img-preview" src="{{ asset($homeProduct->image) }}" alt="">
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
