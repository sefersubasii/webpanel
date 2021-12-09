@extends('master')

@section('title', 'Kategori Düzenle')

@section('add-button', route('categories.create'))
@section('list-button', route('categories.index'))

@section('content')
<form class="form" role="form" action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Kategori Başlığı</label>
            @multilingual(['attribute' => 'title', 'model' => $category])
            <input type="text" class="form-control" name="title" value="{{ old('title', $category->title) }}">
        </div>

        <div class="form-group">
            <label>Url</label>
            @multilingual(['attribute' => 'slug', 'model' => $category, 'disabled' => true])
            <input type="text" class="form-control" value="{{ $category->slug }}" disabled>
        </div>

        <div class="form-group">
            <label>Üst Kategori</label>
            <select name="parent_id" class="form-control">
                <option value="">-- YOK --</option>
                {{ selectTreeList($categories, old('parent_id', $category->parent_id)) }}
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
            <img class="img-preview" src="{{ asset($category->image) }}" alt="">
        </div>

        <div class="form-group">
            <label for="chooseHeaderImage">Sayfa Üst Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseHeaderImage" accept="image/*" name="header_image">
                    <label class="custom-file-label" for="chooseHeaderImage">Resim seç</label>
                </div>
            </div>
            <img class="img-preview" src="{{ asset($category->header_image) }}" alt="">
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
