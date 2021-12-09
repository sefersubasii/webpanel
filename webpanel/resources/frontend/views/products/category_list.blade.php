@extends('layouts.page')

@section('content')
<div class="corporate-detail-area">
    <div class="container py-4">
        <div class="category-area custom-nav">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="position-relative category-banner">
                        <img class="w-100" src="{{ asset($category->header_image ?: 'images/kategori_ust.jpg') }}" alt="" style="min-height: 80px;">
                        <div class="banner-divider"><img src="{{ asset('images/banner-divider.png') }}" alt=""></div>
                        <div class="leaf-left d-none d-sm-block"><img src="{{ asset('images/leaf-left.png') }}" alt=""></div>
                        <div class="leaf-right d-none d-sm-block"><img src="{{ asset('images/leaf-right.png') }}" alt=""></div>
                        <div class="title">
                            <div>
                                <span class="ustbaslik">{{ $category->title }}</span>
                                <ul>
                                    <li><span class="altbaslik">{{ __('Ürünlerimiz') }} <i class="fa fa-angle-right"></i>
                                    </li></span>
                                    <span class="altbaslik">
                                        <li>{{ $category->title }}</li>
                                    </span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                @forelse ($category->children as $children)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('frontend.product.category.show', $children->slug) }}" class="text-danger">
                        <div class="category-image-item position-relative">
                            <div class="border-area mb-4">
                                <img class="w-100" src="{{ asset($children->image ?: 'images/meyve_caylari.jpg') }}" alt="">
                            </div>
                            <div class="image-text">
                                <div class="category-title text-center font-weight-bold mt-2">
                                    {{ $children->title }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <p class="text-center">Kategori bulunamadı!</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
