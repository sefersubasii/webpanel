@extends('master')

@section('title', 'Sosyal Medya Ekle')

@section('list-button', route('social-media.index'))

@section('content')
<form class="form" role="form" action="{{ route('social-media.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>Link</label>
            @multilingual(['attribute' => 'link'])
            <input type="text" class="form-control" name="link" value="{{ old('link') }}">
        </div>
        
        <div class="form-group">
            <label>İkon</label>
            <select name="icon" class="form-control">
                <option value="">-- SEÇ --</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="instagram">Instagram</option>
                <option value="youtube">YouTube</option>
                <option value="linkedin">LinkedIn</option>
            </select>
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
