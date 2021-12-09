@extends('master')

@section('title', 'Sayfa Düzenle')

@section('add-button', route('pages.create'))
@section('list-button', route('pages.index'))

@section('content')
<form class="form" role="form" action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title', 'model' => $page])
            <input type="text" class="form-control" name="title" value="{{ old('title', $page->title) }}">
        </div>

        <div class="form-group">
            <label>Url</label>
            @multilingual(['attribute' => 'slug', 'model' => $page, 'disabled' => true])
            <input type="text" class="form-control" name="slug" value="{{ old('slug', $page->slug) }}" disabled>
        </div>

        <div class="form-group">
            <label>Üst Sayfa</label>
            <select name="parent_id" class="form-control">
                <option value="">-- YOK --</option>
                {{ selectTreeList($pages, old('parent_id', $page->parent_id)) }}
            </select>
        </div>

        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content', 'model' => $page])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content', $page->content) }}
            </textarea>
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
