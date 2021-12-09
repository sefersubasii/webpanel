@extends('master')

@section('title', 'Kullanıcı Ekle')

@section('list-button', route('users.index'))

@section('content')
<form class="form" role="form" action="{{ route('users.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>İsim</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label>E-Posta</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label>Şifre</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label>Şifre (Tekrar)</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>
    
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Gönder</button>
    </div>
</form>
@endsection
