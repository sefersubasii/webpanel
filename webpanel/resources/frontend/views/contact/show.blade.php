@extends('layouts.page')

@section('content')
<div class="corporate-detail-area">
    <div class="container py-4">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="leftMenu my-3">
                    {{-- Mobile Menu --}}
                    <div class="mobile-menu-wrapper d-block d-md-none">
                        <button id="mobileMenu" class="btn btn-block btn-success d-block d-lg-none mb-4">{{ __('Menü') }} <i class="fa fa-caret-down float-right"></i></button>
                        <ul id="productLeftTabMobile" class="rigthMenu nav nav-pills flex-column">
                            @foreach ($addresses as $menu)
                            <li class="nav-item">
                                <a href="#" role="button" data-target="#content_{{ $menu->id }}" data-toggle="tab" class="mobile-link text-uppercase  {{ $loop->first ? 'active' : ''}}">
                                    {{ $menu->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- Desktop Menü --}}
                    <ul class="nav nav-pills flex-column d-none d-md-block">
                        @foreach ($addresses as $menu)
                        <li class="nav-item">
                            <a href="#" role="button" data-target="#content_{{ $menu->id }}" data-toggle="tab" class="text-uppercase {{ $loop->first ? 'active' : ''}}">
                                {{ $menu->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                <div class="tab-content w-100">
                    @foreach ($addresses as $address)
                    <!--Tab Start-->
                    <div id="content_{{ $address->id }}" class="tab-pane fade {{ $loop->first ? 'active show' : ''}}">
                        <div class="tab-wrapper border-left px-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon pr-2"><i class="fa fa-map-marker"></i></div>
                                        <div>
                                            <span class="address d-block">{{ $address->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @if ($address->map)
                                <div class="col-md-6 order-last order-md-first">
                                    <span class="map d-block">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            {!! $address->map !!}
                                        </div>
                                    </span>
                                </div>
                                @endif
                                <div class="col-md-6 order-first order-md-last">
                                    <div class="d-flex flex-column justify-content-around h-100">
                                        <div class="phone mb-3">
                                            <span class="title d-block">{{ __('Telefon') }}</span>
                                            <span class="text d-block">{{ $address->phone }}</span>
                                        </div>
                                        <div class="phone mb-3">
                                            <span class="title d-block">{{ __('Fax') }}</span>
                                            <span class="text d-block">{{ $address->fax }}</span>
                                        </div>
                                        <div class="phone mb-3">
                                            <span class="title d-block">{{ __('E-Posta') }}</span>
                                            <span class="text d-block">{{ $address->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab End-->
                    @endforeach
                </div>
                
                <div class="contact-form mt-5 py-3">
                    @if(session('success_message'))
                    <div class="alert alert-success mx-3">
                        <i class="fa fa-check"></i> {{ session('success_message') }}
                    </div>
                    @endif
                    
                    @if ($errors->any())
                    <div class="alert alert-danger p-2 mx-3">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                            <li class="d-block">
                                <i class="fa fa-times"></i> {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('frontend.contact.form') }}" method="POST">
                        @csrf
                        <div class="row m-2">
                            <div class="col-md-12">
                                <div class="title text-center mb-2">{{ __('İSTEK VE ÖNERİ FORMU') }}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">{{ __('İsim Soyisim') }}</label>
                                    <input required type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ __('E-Posta') }}</label>
                                    <input required type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">{{ __('Telefon') }}</label>
                                    <input required type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">{{ __('Konu') }}</label>
                                    <select required name="subject" class="form-control" id="subject"  value="{{ old('subject') }}">
                                        <option>{{ __('Konu Seçin') }}</option>
                                        <option>{{ __('Memnuniyet') }}</option>
                                        <option>{{ __('Ürün Danışma') }}</option>
                                        <option>{{ __('Satış') }}</option>
                                        <option>{{ __('Şikayet: Ürün Kullanımı') }}</option>
                                        <option>{{ __('Şikayet: Ürün Hatası') }}</option>
                                        <option>{{ __('Diğer') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">{{ __('Mesaj') }}</label>
                                    <textarea required name="message" id="message" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <button class="btn btn-danger">{{ __('Gönder') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
