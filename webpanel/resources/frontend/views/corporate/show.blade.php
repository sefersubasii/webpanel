@extends('layouts.page')

@section('content')
<div class="corporate-detail-area">
    <div class="container py-4">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12">
                <div class="leftMenu my-3">
                    {{-- Mobile Menu --}}
                    <div class="mobile-menu-wrapper d-block d-md-none">
                        <button id="mobileMenu" class="btn btn-block btn-success d-block d-lg-none mb-4">{{ __('Menü') }} <i class="fa fa-caret-down float-right"></i></button>
                        <ul id="productLeftTabMobile" class="rigthMenu nav nav-pills flex-column">
                            @include('layouts._partials.corporate.sidebar')
                        </ul>
                    </div>
                    {{-- Desktop Menü --}}
                    <ul class="nav nav-pills flex-column d-none d-md-block">
                        @include('layouts._partials.corporate.sidebar')
                    </ul>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12">
                <div class="tab-content w-100">
                    <div id="parentOne" class="tab-pane fade active show">
                        <div class="tab-wrapper border-left">
                            <div class="title text-uppercase mb-5 px-4">{{ $page->title }}</div>
                            <div class="content px-4">{!! $page->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
