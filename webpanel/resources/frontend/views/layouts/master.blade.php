@include('layouts._partials.head')

<body class="homePage">
    <div class="new-logo" style="display:none">
        <img class="logo" src="{{ setting('floating_logo', 'images/Doğuş%20Orta%20Logo.png') }}" alt="doğuş çay">
    </div>
    <a href="#1" id="go-top" class="go-top"><i class="fa fa-angle-up"></i></a>
    <div>
        <div class="scroll-down-area">
            <a href="#2">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">{{ __('Ürünleri İncele') }}</span>
            </a>
        </div>
    </div>

    <div id="homepage" class="wrapper">
        <div class="header section position-relative" style="overflow: hidden;">
            <div class="main-logo d-none d-lg-block">
                <a href="{{ route('frontend.index') }}">
                    <img class="logo" src="{{ setting('logo', 'images/Doğuş%20Orta%20Logo.png') }}" alt="Doğuş Çay Logo">
                </a>
            </div>
            <div class="header-area">
                <nav class="navbar">
                    @include('layouts._partials.nav')
                </nav>

                @hasSection ('slider')
                    <div class="carousel-area">
                        <div class="container-fluid">
                            @yield('slider')
                        </div>
                    </div>
                @endif

            </div>
        </div>

        @yield('content')

@include('layouts._partials.footer')
