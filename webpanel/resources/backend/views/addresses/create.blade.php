@extends('master')

@section('title', 'Adres Ekle')

@section('list-button', route('addresses.index'))

@section('content')
<form class="form" role="form" action="{{ route('addresses.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title'])
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label>E-Posta</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label>Telefon</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label>Fax</label>
            <input type="text" class="form-control" name="fax" value="{{ old('fax') }}">
        </div>

        <div class="form-group">
            <label>Adres</label>
            <textarea class="form-control richTextBox" name="address" rows="13">
                {{ old('address') }}
            </textarea>
        </div>

        <div class="form-group">
            <label>Harita (Google Maps Iframe)</label>
            <textarea class="form-control" name="map" rows="5">{{ old('map') }}</textarea>
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
