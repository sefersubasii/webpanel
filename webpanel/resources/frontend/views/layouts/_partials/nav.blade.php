<div class="container top-area border-bottom py-2 px-0">
    <div class="top-left-area">
        <ul class="d-inline-block w-100">
            <div class="mobile-dropdown d-flex justify-content-between align-items-center d-sm-none">
                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
                        <span id="selected">
                            <img class="d-none d-sm-inline" src="{{ asset('images/' . app()->getLocale()) }}.png" alt="{{ app()->getLocale() }}">
                            <span class="text-upper">{{ app()->getLocale() }}</span>
                        </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="z-index: 99999;">
                        <li class="d-block"><a href="{{ route('frontend.locale', 'tr') }}">TR</a></li>
                        <li class="d-block"><a href="{{ route('frontend.locale', 'en') }}">EN</a></li>
                    </ul>
                </div>
                <div class="top-right-area">
                    <ul class="float-right">
                        <li class="p-0">
                            <a target="_blank" href="https://satis.doguscay.com.tr/">
                                <i class="fa fa-cart-plus text-white"></i> {{ __('Online Mağaza') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <li class="lang-area d-none d-sm-inline-block">
                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span id="selected">
                            <img class="d-none d-sm-inline-block" src="{{ asset('images/' . app()->getLocale()) }}.png" alt="{{ app()->getLocale() }}">
                            <span class="text-upper">{{ app()->getLocale() }}</span>
                        </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="z-index: 99999;">
                        <li class="d-block">
                            <a href="{{ route('frontend.locale', 'tr') }}"><img src="{{ asset('images/tr.png') }}" alt="TR"> TR</a>
                        </li>
                        <li class="d-block">
                            <a href="{{ route('frontend.locale', 'en') }}"><img src="{{ asset('images/en.png') }}" alt="EN"> EN</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="lang-area d-none d-sm-inline-block">
                <a href="{{ route('frontend.corporate.show') }}">{{ __('Hakkımızda') }}</a>
            </li>
            <li class="products-dropdown d-none d-sm-inline-block">
                <a href="javascript:void(0)">{{ __('Ürünlerimiz') }} <i class="fa fa-angle-down"></i></a>
                <ul class="shadow">
                    @foreach ($mainCategories as $mainCategory)

                        <li>
                            <a class="nav-link" href="{{ route('frontend.product.category.show', $mainCategory->slug) }}">{{ $mainCategory->title }}</a>
                        </li>
                    @endforeach
                    {{-- <li><a class="nav-link" href="categories.html">{{ __('Doğuş Çay') }}</a></li>
                    <li><a class="nav-link" href="suger-categories.html">{{ __('Doğuş Şeker') }}</a></li>
                    <li><a class="nav-link" href="categories.html">{{ __('Doğuş Salça') }}</a></li> --}}
                    <li><a class="nav-link" target="_blank" href="https://www.dogusyiyecekicecek.com.tr/">{{ __('Doğuş Yiyecek ve İçecek') }}</a></li>
                    <li><a class="nav-link" target="_blank" href="https://www.dogusoriginalicetea.com.tr/">{{ __('Doğuş Original Ice Tea') }}</a></li>
                </ul>
            </li>
            <li class="d-none d-sm-inline-block"><a href="https://herdemtoprakicin.com/">{{ __('Sürdürülebilir Çay Tarımı') }}</a></li>
            <li class="d-none d-sm-inline-block"><a href="{{ route('frontend.contact.show') }}">{{ __('İletişim') }}</a></li>
        </ul>
    </div>
    <div class="top-right-area d-none d-sm-block">
        <ul>
            <li><a href="https://mustahsilcay.doguscay.com.tr:15050/#/auth/login" target="_blank"><i style="font-size: 14px;"><img src="{{asset("images/globe-solid.svg")}}" alt="" style="width: 12px;"></i>E-Üretici</a></li>
            <li>
                <a href="https://satis.doguscay.com.tr/"><i class="fa fa-cart-plus"></i>
                    {{ __('Online Mağaza') }}
                </a>
            </li>
        </ul>
    </div>
    <div class="mobile-hed d-flex justify-content-end align-items-center d-sm-none w-100 mt-3">
        <a href="{{ route('frontend.index') }}" class="mobile-logo d-block d-sm-none text-center">
            <img class="lazy" data-src="{{ setting('logo', 'images/Doğuş%20Orta%20Logo.png') }}" alt="doğuş çay">
        </a>
        <ul class="mb-1">
            <li><a href="{{ route('frontend.corporate.show') }}">{{ __('Kurumsal') }}</a></li>
            <li class="products-dropdown">
                <a href="javascript:void(0)">{{ __('Ürünlerimiz') }} <i class="fa fa-angle-down"></i></a>
                <ul class="shadow">
                    @foreach ($mainCategories as $mainCategory)
                        <li>
                            <a class="nav-link" href="{{ route('frontend.product.category.show', $mainCategory->slug) }}">{{ $mainCategory->title }}</a>
                        </li>
                    @endforeach
                    <li><a class="nav-link" target="_blank" href="https://www.dogusyiyecekicecek.com.tr/">{{ __('Doğuş Yiyecek ve İçecek') }}</a></li>
                    <li><a class="nav-link" target="_blank" href="https://www.dogusoriginalicetea.com.tr/">{{ __('Doğuş Original Ice Tea') }}</a></li>
                </ul>
            </li>
            <li><a href="{{ route('frontend.contact.show') }}">{{ __('İletişim') }}</a></li>
        </ul>
    </div>
</div>
<div class="container py-2 px-0">
    <div class="social-area d-none d-md-block">
        <ul>
            @foreach($socialMedia as $sm)
                <li>
                    <a class="{{ $sm->icon }}" href="{{ $sm->link ?: '#' }}">
                        <i class="fa fa-{{ $sm->icon }}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div></div>
    <div class="d-flex align-items-center justify-content-end w-auto">
        <div class="search-area">
            <form action="{{route("frontend.search")}}">
               <input type="text" name="q" onfocus="this.value='';" onblur="if (this.value==''){this.value='Aranacak terim';}" class="" placeholder="{{ __('Arama yapın..') }}">
                <input type="submit" value="ARA">
            </form>
            <button><i class="fa fa-search"></i></button>
        </div>
        <div class="navbar-toggler-wrapper">
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                data-target="#collapsingNavbar">
                <span class="fa fa-bars"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="collapsingNavbar">
        <ul class="navbar-nav text-center">
            <li class="nav-item">
                <a class="nav-link {{ frontendActiveMenu(route('frontend.index'), false) }}" href="{{ route('frontend.index') }}">{{ __('Anasayfa') }}</a>
            </li>
            @foreach ($mainCategories as $mainCategory)
                <li class="nav-item">
                    <a class="nav-link {{ frontendActiveMenu(route('frontend.product.category.show', $mainCategory->slug)) }}" href="{{ route('frontend.product.category.show', $mainCategory->slug) }}">{{ $mainCategory->title }}</a>
                </li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="https://www.dogusyiyecekicecek.com.tr/">{{ __('Doğuş Yiyecek ve İçecek') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.dogusoriginalicetea.com.tr/">{{ __('Doğuş Original Ice Tea') }}</a>
            </li>
        </ul>
    </div>
</div>
