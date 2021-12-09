<footer class="footer section">
    <div class="footer-area py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mb-2">
                    <div class="footer-address d-flex justify-content-start align-items-center">
                        <div class="icon pr-2"><i class="fa fa-map-marker"></i></div>
                        <div class="border-left pl-2">
                            <span class="d-block">{{ setting('address') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="footer-phone d-flex justify-content-start align-items-center">
                        <div class="icon pr-2"><i class="fa fa-phone"></i></div>
                        <div class="border-left pl-2">
                            <span class="d-block">
                                <a href="tel:{{ phoneNumber(setting('phone')) }}">{{ setting('phone') }}</a>
                            </span>
                            <span class="d-block">
                                <a href="tel:{{ phoneNumber(setting('phone2')) }}">{{ setting('phone2') }}</a>
                                - <a href="tel:{{ phoneNumber(setting('phone3')) }}">{{ setting('phone3') }}</a>
                            </span>
                            <span class="d-block">

                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="footer-call">
                        <span class="d-block">{{ __('Tüketici Danışma Hattı') }}</span>
                        <span class="d-block">
                            <a href="tel:{{ phoneNumber(setting('callcenter')) }}">{{ setting('callcenter') }}</a>
                        </span>
                    </div>
                </div>
            </div>
            <hr class="footer-line">
            <div class="row">
                <div class="col-md-12 d-block d-md-none">
                    <div class="social-area d-flex justify-content-center">
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center py-3 footer-menu">
                    <ul>
                        <li><a href="{{ route('frontend.corporate.show') }}">{{ __('Hakkımızda') }}</a></li>
                        @foreach ($mainCategories as $mainCategory)
                            <li>
                                <a class="nav-link" href="{{ route('frontend.product.category.show', $mainCategory->slug) }}">{{ $mainCategory->title }}</a>
                            </li>
                        @endforeach
                        <li><a target="_blank" href="https://www.dogusyiyecekicecek.com.tr/">{{ __('Doğuş Yiyecek ve İçecek') }}</a></li>

                        <li><a target="_blank" href="https://herdemtoprakicin.com/">{{ __('Sürdürülebilir Çay Tarımı') }}</a></li>
                        <li><a target="_blank" href="https://satis.doguscay.com.tr/">{{ __('Online Mağaza') }}</a></li>
                        <li><a href="{{ route('frontend.contact.show') }}">{{ __('İletişim') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 text-center text-sm-left order-last order-md-first">
                    {{ setting('copyright') }}


                </div>
                <div class="col-12 col-sm-6 text-center text-sm-right order-first order-md-last">
                    <img class="lazy" data-src="images/kilavuzlogo.png" alt="Tek Kılavuz">
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
@stack('before_js')
<script src="{{ mix('js/all.js') }}"></script>
@stack('js')
</body>
</html>
