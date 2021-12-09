@extends('master')

@section('title', 'Adres Düzenle')

@section('add-button', route('addresses.create'))
@section('list-button', route('addresses.index'))

@section('content')
<form class="form" role="form" action="{{ route('addresses.update', $address->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Başlık</label>
            @multilingual(['attribute' => 'title', 'model' => $address])
            <input type="text" class="form-control" name="title" value="{{ old('title', $address->title) }}">
        </div>

        <div class="form-group">
            <label>E-Posta</label>
            <input type="text" class="form-control" name="email" value="{{ old('email', $address->email) }}">
        </div>

        <div class="form-group">
            <label>Telefon</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $address->phone) }}">
        </div>

        <div class="form-group">
            <label>Fax</label>
            <input type="text" class="form-control" name="fax" value="{{ old('fax', $address->fax) }}">
        </div>

        <div class="form-group">
            <label>Adres</label>
            <textarea class="form-control richTextBox" name="address" rows="13">
                {{ old('address', $address->address) }}
            </textarea>
        </div>

        <div class="form-group">
            <label>Harita (Google Maps Iframe)</label>
            <textarea class="form-control" name="map" rows="5">{{ old('map', $address->map) }}</textarea>
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
