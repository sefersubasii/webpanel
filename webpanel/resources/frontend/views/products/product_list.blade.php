@extends('layouts.page')

@section('content')
<div class="corporate-detail-area">
    <div class="container py-4">
        <div class="product-area custom-nav">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="position-relative category-banner">
                        <img class="w-100" src="{{ asset($category->header_image ?: 'images/kategori_ust.jpg') }}" alt="" style="min-height: 80px;">
                        <div class="banner-divider"><img src="{{ asset('images/banner-divider.png') }}" alt=""></div>
                        <div class="title">
                            <div>
                                <span class="ustbaslik">
                                    <h2>{{ $category->title }}</h2>
                                </span>
                                <span class="altbaslik">
                                    <ul>
                                        <li>{{ __('Ürünlerimiz') }} <i class="fa fa-angle-right"></i></li>
                                        @if(isset($category->parent->title))
                                        <li>{{ $category->parent->title }} <i class="fa fa-angle-right"></i></li>
                                        @endif
                                        <li>{{ $category->title }}</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="js-filter">
                        @if(isset($category->children) && $category->children->count())
                            <button data-filter="*" class="is-active">{{ __('Tümü') }}</button>
                            
                            @foreach ($category->children as $childCategory)
                            <button data-filter=".{{ $childCategory->slug }}">{{ $childCategory->title }}</button>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="list w-100">
                    @forelse ($products as $product)
                        <div class="col-md-6 col-lg-4 col-xl-3 my-4 list__item {{ $product->category->slug }}">
                            <div class="product-item position-relative">
                                <a href="{{ route('frontend.product.show', $product->slug) }}">
                                    <img class="w-100" src="{{ asset($product->image) }}" alt="">
                                </a>
                                <div class="product-item-content text-center">
                                    <div class="product-item-title font-weight-bold mt-2">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-item-body mt-2">
                                        {!! $product->content !!}
                                    </div>
                                    <div class="product-item-btn mt-2">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}" class="btn btn-success">{{ __('Ürün Detayı') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 col-lg-12 col-xl-12 my-4 list__item">
                            <div class="product-item position-relative text-center">
                                {{ __('Listelenecek ürün bulunamadı!') }}
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function initIsotope(){
        (function ($) {
            var $grid = $('.list').isotope({
                // options
                itemSelector: '.list__item',
                layoutMode: 'masonry',
                masonry: {
                    gutter: 0
                }
            });
            // filter items on button click
            $('.js-filter').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
                $('.js-filter button').removeClass('is-active');
                $(this).addClass('is-active');
            });
        })(jQuery);
    }
</script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js" onload="initIsotope()"></script>
@endpush
