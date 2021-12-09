@extends('master')

@section('title', 'Ürün Ekle')

@section('list-button', route('products.index'))

@section('content')
<form class="form" role="form" action="{{ route('products.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Ürün Adı</label>
            @multilingual(['attribute' => 'name'])
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="category_id" class="form-control">
                <option value="">-- KATEGORİ SEÇ --</option>
                {{ selectTreeList($categories, old('category_id')) }}
            </select>
        </div>

        <div class="form-group">
            <label>Barkod<small>(Birden fazla barkod tanımlaması için virgül(,) ile ayırın! Gram tanımlaması kadar)</small></label>
            <input type="text" class="form-control" name="barcode" value="{{ old('barcode') }}">
        </div>



        <div class="form-group">
            <label>Gram <small>(Birden fazla gram tanımlaması için virgül(,) ile ayırın!)</small></label>
            <select name="gram[]" class="form-control select2-number-tags" multiple="multiple"></select>
        </div>

        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content'])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content') }}
            </textarea>
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
