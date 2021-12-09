@include('layouts._partials.head')

<body style="overflow-y: auto;" class="subPage">

    <div class="wrapper bg-wrapper">
        <div class="">
            <div class="header position-relative">
                <div class="main-logo d-none d-lg-block">
                    <a href="{{ route('frontend.index') }}">
                        <img class="logo lazy" data-src="{{ asset(setting('floating_logo', 'images/Doğuş%20Orta%20Logo.png')) }}" alt="doğuş çay">
                    </a>
                </div>
                <div class="header-area mb-5 h-auto">
                    <nav class="navbar position-relative">
                        @include('layouts._partials.nav')
                    </nav>
                </div>
            </div>

            @yield('content')
        </div>

        @include('layouts._partials.footer')
