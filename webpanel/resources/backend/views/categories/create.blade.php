@extends('master')

@section('title', 'Kategori Ekle')
@section('list-button', route('categories.index'))

@section('content')
<form class="form" role="form" action="{{ route('categories.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kategori Başlığı</label>
            @multilingual(['attribute' => 'title'])
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>Üst Kategori</label>
            <select name="parent_id" class="form-control">
                <option value="">-- YOK --</option>
                {{ selectTreeList($categories, old('parent_id')) }}
            </select>
        </div>

        <div class="form-group">
            <label for="chooseImage">Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control" id="chooseImage" accept="image/*" name="image">
                    <label class="custom-file-label" for="chooseImage">Resim seç</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="chooseHeaderImage">Sayfa Üst Resim</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="chooseHeaderImage" accept="image/*" name="header_image">
                    <label class="custom-file-label" for="chooseHeaderImage">Resim seç</label>
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
