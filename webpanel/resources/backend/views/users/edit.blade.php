@extends('master')

@section('title', 'Kullanıcı Düzenle')

@section('add-button', route('users.create'))
@section('list-button', route('users.index'))

@section('content')
<form class="form" role="form" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>İsim</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label>E-Posta</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
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
