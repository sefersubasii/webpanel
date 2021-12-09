<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Doğuş Çay Yönetim Paneli')</title>
    <link rel="stylesheet" href="{{ mix('backend/css/app.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i> {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <form action="{{ route('logout') }}" method="post" id="logout-form">
                            @csrf
                            <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fab fa-logout"></i> Çıkış yap
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-2">
            <!-- Brand Logo -->
            <a href="{{ url('admin') }}" class="brand-link">
                <img src="{{ asset('backend/images/logo.png') }}" alt="Doğuş Çay Logo"
                class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Doğuş Çay</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        {{-- <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Yönetim Paneli
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link{{ activeMenu('/', false) }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Yönetim Paneli
                                    {{-- <span class="right badge badge-danger">1</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link{{ activeMenu('categories') }}">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Kategoriler
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link{{ activeMenu('products') }}">
                                <i class="nav-icon fas fa-cube"></i>
                                <p>
                                    Ürünler
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home-products.index') }}" class="nav-link{{ activeMenu('home-products') }}">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Anasayfa Ürünleri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sliders.index') }}" class="nav-link{{ activeMenu('sliders') }}">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Slider
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.index') }}" class="nav-link{{ activeMenu('pages') }}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Kurumsal Sayfalar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('social-media.index') }}" class="nav-link{{ activeMenu('social-media') }}">
                                <i class="nav-icon fas fa-share-alt"></i>
                                <p>
                                    Sosyal Medya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('addresses.index') }}" class="nav-link{{ activeMenu('addresses') }}">
                                <i class="nav-icon fas fa-map-marked"></i>
                                <p>
                                    Adresler
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-forms.index') }}" class="nav-link{{ activeMenu('contact-forms') }}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    İletişim Formları
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link{{ activeMenu('users') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Kullanıcılar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('settings.index') }}" class="nav-link{{ activeMenu('settings') }}">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    Ayarlar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                @yield('title')
                                @hasSection ('add-button')
                                &vellip; <a href="@yield('add-button')" class="btn btn-success">
                                    <i class="fas fa-plus"></i> &nbsp; Yeni Ekle
                                </a>
                                @endif
                                @hasSection ('list-button')
                                @hasSection ('add-button')@else&vellip;@endif
                                <a href="@yield('list-button')" class="btn btn-info">
                                    <i class="fas fa-list"></i> &nbsp; Listeyi Göster
                                </a>
                                @endif
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="language-selector float-right d-none">
                                <div class="btn-group btn-group-sm btn-group-toggle" role="group" data-toggle="buttons">
                                    @foreach(config('translatable.locales') as $lang)
                                        <label class="btn btn-primary{{ ($lang === config('translatable.default')) ? " active" : "" }}">
                                            <input type="radio" name="i18n_selector" id="{{$lang}}" autocomplete="off"{{ ($lang === config('translatable.default')) ? ' checked="checked"' : '' }}> {{ strtoupper($lang) }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @hasSection ('blank_content')
                    @yield('blank_content')
                    @else
                        @if ($errors->any())
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-danger p-2">
                                        <ul class="m-0">
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('success_message'))
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success p-2">
                                        {{ session('success_message') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('error_message'))
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success p-2">
                                        {{ session('error_message') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer overflow-auto">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Developed By <i class="fas fa-heart text-maroon"></i> <a href="https://tekkilavuz.com.tr"
                class="text-dark">Tek Kılavuz</a>
            </div>
            <!-- Default to the left -->
            {{-- <strong>Copyright &copy; 2020 <a href="httpss://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- AdminLTE App -->
    {{-- <script src="dist/js/adminlte.min.js"></script> --}}
    <script src="{{ mix('backend/js/app.js') }}"></script>
    @stack('js')
</body>

</html>
