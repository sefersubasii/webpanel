@extends('master')

@section('title', 'Sayfa Ekle')

@section('list-button', route('pages.index'))

@section('content')
<form class="form" role="form" action="{{ route('pages.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title'])
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>Üst Sayfa</label>
            <select name="parent_id" class="form-control">
                <option value="">-- YOK --</option>
                {{ selectTreeList($pages, old('parent_id')) }}
            </select>
        </div>

        <div class="form-group">
            <label>Açıklama</label>
            @multilingual(['attribute' => 'content'])
            <textarea class="form-control richTextBox" name="content" id="richtextcontent" rows="13">
                {{ old('content') }}
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
