@foreach ($menus as $menu)
    @if(isset($menu['children']) && $menu['children'])
        <li class="nav-item d-block w-100 {{ isset($children)  ? 'ml-2' : ''}}">
            <div class="panel panel-default">
                <a class="{{ isset($children)  ? 'nav-link p-1 small font-weight-500' : 'parentMenu text-uppercase'}}" role="button" data-toggle="collapse" href="#{{ $menu['slug'] }}"  aria-expanded="false"  aria-controls="{{ $menu['slug'] }}">
                    {{ $menu['title'] }}
                </a>
                <div id="{{ $menu['slug'] }}" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <ul class="nav">
                            @include('layouts._partials.corporate.sidebar', [
                                'menus' => $menu['children'],
                                'children' => true
                            ])
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    @elseif(isset($children) && $children)
        <li class="d-block w-100 ml-2 {{ isset($menu['children']) ? 'nav-item' : '' }}">
            <a href="{{ route('frontend.corporate.show', $menu['slug']) }}" class="nav-link p-1 small font-weight-500 {{ frontendActiveMenu(route('frontend.corporate.show', $menu['slug'])) }}">
                {{ $menu['title'] }}
            </a>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('frontend.corporate.show', $menu['slug']) }}" class="text-uppercase {{ frontendActiveMenu(route('frontend.corporate.show', $menu['slug'])) }}">{{ $menu['title'] }}</a>
        </li>
    @endisset
@endforeach
    {{-- <li class="nav-item">
        <a href="" role="button" data-target="#parentOne" data-toggle="tab" class="text-uppercase active">Hakkımızda</a>
    </li>
    <li class="nav-item">
        <a href="" role="button" data-target="#parentTwo" data-toggle="tab" class="text-uppercase">Kalite Politikamız</a>
    </li>
    <li class="nav-item">
        <div class="panel panel-default" id="parentThree">
            <a class="parentMenu text-uppercase collapsed" role="button" data-toggle="collapse" data-parent="#parentThree" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Yönetim Kurulu
            </a>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="parentThree">
                <div class="panel-body">
                    <ul class="nav">
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubOne" data-toggle="tab" class="nav-link p-1 small font-weight-500">Yönetim Kurulu Üyeleri</a></li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubTwo" data-toggle="tab" class="nav-link p-1 small font-weight-500">Organizasyon Şeması</a></li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubThree" data-toggle="tab" class="nav-link p-1 small font-weight-500">Başkanın Mesajı</a></li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubFour" data-toggle="tab" class="nav-link p-1 small font-weight-500">Misyon / Vizyon</a></li>
                        <li class="nav-item d-block w-100 ml-2">
                            <div class="panel panel-default" id="menuThreeSubFive">
                                <a class="nav-link p-1 small font-weight-500 collapsed" role="button" data-toggle="collapse" data-parent="#menuThreeSubFive" href="#collapseOneSubOne" aria-expanded="false" aria-controls="collapseOneSubOne">
                                    Komiteler
                                </a>
                                <div id="collapseOneSubOne" class="panel-collapse collapsed collapse" role="tabpanel" aria-labelledby="menuThreeSubFive">
                                    <div class="panel-body pl-2">
                                        <ul class="nav">
                                            <li class="d-block w-100"><a href="" data-target="#parentFiveSubOneChildOne" data-toggle="tab" class="nav-link p-1 small font-weight-500">Denetim Komitesi</a></li>
                                            <li class="d-block w-100"><a href="" data-target="#parentFiveSubTwoChildOne" data-toggle="tab" class="nav-link p-1 small font-weight-500">Kurumsal Yönetim Komitesi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-block w-100 ml-2">
                            <div class="panel panel-default" id="menuThreeSubSix">
                                <a class="nav-link p-1 small font-weight-500 collapsed" role="button" data-toggle="collapse" data-parent="#menuThreeSubSix" href="#collapseOneSubTwo" aria-expanded="false" aria-controls="collapseOneSubTwo">
                                    Etik Kurallar
                                </a>
                                <div id="collapseOneSubTwo" class="panel-collapse collapsed collapse" role="tabpanel" aria-labelledby="menuThreeSubSix">
                                    <div class="panel-body pl-2">
                                        <ul class="nav">
                                            <li class="d-block w-100"><a href="" data-target="#parentSixSubOneChildOne" data-toggle="tab" class="nav-link p-1 small font-weight-500">Denetim Komitesi</a></li>
                                            <li class="d-block w-100"><a href="" data-target="#parentSixSubTwoChildOne" data-toggle="tab" class="nav-link p-1 small font-weight-500">Kurumsal Yönetim Komitesi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubSeven" data-toggle="tab" class="nav-link p-1 small font-weight-500">Menfaat sahipleri Politikası</a></li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubEight" data-toggle="tab" class="nav-link p-1 small font-weight-500">Çıkar Çatışması Politikası</a></li>
                        <li class="d-block w-100 ml-2"><a href="" data-target="#parentThreeSubNine" data-toggle="tab" class="nav-link p-1 small font-weight-500">Sosyal Sorumluluk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="" role="button" data-target="#parentFour" data-toggle="tab" class="text-uppercase">İnsan Kaynakları</a>
    </li>
    <li class="nav-item">
        <a href="" role="button" data-target="#parentFive" data-toggle="tab" class="text-uppercase">Basın Odası</a>
    </li>
    <li class="nav-item">
        <a href="" role="button" data-target="#parentSix" data-toggle="tab" class="text-uppercase">Reklam Filmleri</a>
    </li> --}}
