@extends('layouts.master')

@section('homepage', true)

@section('slider')
    {{-- Desktop Slider --}}
    <div class="row d-none d-md-block">
        <div class="owl-carousel owl-theme main-owl">
            @foreach ($sliders as $slider)
                <div class="item" style="background-image: url('{{ asset($slider->image) }}');">
                    <a href="{{ $slider->link ?: 'javascript:void(0)' }}">
                        <span class="main-text">{{ $slider->title }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Mobile Slider --}}
    <div class="row d-block d-md-none">
        <div class="owl-carousel owl-theme main-owl">
            @foreach ($sliders as $slider)
                <div class="item" style="background-image: url('{{ asset($slider->mobile_image) }}');">
                    <span class="mobile-main-text">{{ $slider->title }}</span>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('content')
    @foreach ($homeProducts as $homeProduct)
        <div class="home-product-wrapper section">
            <div class="home-product w-100">
                <div class="image-area">
                    <div class="container-fluid">
                        <div class="row">
                            @if($homeProduct->image_position === 'left')
                                <div class="col-md-6 px-0 column">
                                    <img class="w-100 home-image lazy" data-src="{{ asset($homeProduct->image) }}" alt="#">
                                </div>
                                <div class="col-md-6 px-0 d-flex justify-content-end align-self-end teaLeaf">
                                    <img class="w-50 d-none d-md-block lazy" data-src="{{ asset($homeProduct->bg_image) }}" alt="#">
                                </div>
                            @else
                                <div class="col-md-6 px-0" style="background-image: url({{ asset($homeProduct->bg_image) }});background-size: cover;"></div>
                                <div class="col-md-6 px-0">
                                    <img class="w-100 home-image lazy" data-src="{{ asset($homeProduct->image) }}" alt="#">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-area">
                    <div class="container h-100">
                        <div class="row align-self-center h-100">
                            @if($homeProduct->image_position === 'left')
                                <div class="col-md-6"></div>
                            @endif
                            <div class="col-md-6 d-flex align-self-center {{ $homeProduct->image_position === 'right' ? 'pr-5' : '' }}">
                                <div class="item-text-area item-{{ $homeProduct->image_position === 'left' ? 'right' : 'left' }}-side">
                                    <div class="item-title">{{ $homeProduct->title }}</div>
                                    <div class="item-subtitle mb-3">{{ $homeProduct->subtitle }}</div>
                                    <div class="item-body">
                                        <p class="text-muted">{!! $homeProduct->content !!}</p>
                                    </div>
                                    @if($homeProduct->button_link)
                                        <a href="{{ $homeProduct->button_link }}" class="btn btn-outline-danger">
                                            {{ $homeProduct->button_text ?: __('Tümünü Gör') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            @if($homeProduct->image_position === 'right')
                                <div class="col-md-6"></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
