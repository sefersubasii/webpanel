@extends('master')

@section('title', 'Ürün Düzenle')

@section('add-button', route('products.create'))
@section('list-button', route('products.index'))

@section('content')
<form class="form" role="form" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Ürün Adı</label>
            @multilingual(['attribute' => 'name', 'model' => $product])
            <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label>Url</label>
            @multilingual(['attribute' => 'slug', 'model' => $product, 'disabled' => true])
            <input type="text" class="form-control" value="{{ $product->slug }}" disabled>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="category_id" class="form-control">
                <option value="">-- KATEGORİ SEÇ --</option>
                {{ selectTreeList($categories, $product->category_id) }}
            </select>
        </div>

        <div class="form-group">
            <label>Barkod<small>(Birden fazla barkod tanımlaması için virgül(,) ile ayırın! Gram tanımlaması kadar)</small></label>
            <input type="text" class="form-control" name="barcode" value="{{ old('barcode', $product->barcode) }}">
        </div>


        <div class="form-group">
            <label>Gram <small>(Birden fazla gram tanımlaması için virgül(,) ile ayırın!)</small></label>
            <select name="gram[]" class="form-control select2-number-tags" multiple="multiple">
                @foreach ($product->gram as $gram)
                    <option value="{{ $gram }}" selected="selected">{{ $gram }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content', 'model' => $product])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content', $product->content) }}
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
            <img class="img-preview" src="{{ asset($product->image) }}" alt="">
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
