@extends('master')

@section('blank_content')
<section class="content">
    <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>
        
        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Sayfa Bulunamadı.</h3>
            <p>
                Aradığınız sayfayı maalesef bulamadık! <br>
                <a href="{{ route('index') }}">anasayfaya dönmek için tıklayın</a>
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>
@endsection