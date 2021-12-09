@extends('master')

@section('title', 'Sosyal Medya Düzenle')

@section('add-button', route('social-media.create'))
@section('list-button', route('social-media.index'))

@section('content')
<form class="form" role="form" action="{{ route('social-media.update', $socialMedia->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $socialMedia->title) }}">
        </div>

        <div class="form-group">
            <label>Link</label>
            @multilingual(['attribute' => 'link', 'model' => $socialMedia])
            <input type="text" class="form-control" name="link" value="{{ old('link', $socialMedia->link) }}">
        </div>
        
        <div class="form-group">
            <label>İkon</label>
            <select name="icon" class="form-control">
                <option value="">-- SEÇ --</option>
                <option {{ isSelected($socialMedia->icon, 'facebook') }} value="facebook">Facebook</option>
                <option {{ isSelected($socialMedia->icon, 'twitter') }} value="twitter">Twitter</option>
                <option {{ isSelected($socialMedia->icon, 'instagram') }} value="instagram">Instagram</option>
                <option {{ isSelected($socialMedia->icon, 'youtube') }} value="youtube">YouTube</option>
                <option {{ isSelected($socialMedia->icon, 'linkedin') }} value="linkedin">LinkedIn</option>
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
