@extends('layouts.page')

@section('content')
<div id="main-product" class="product-detail-area">
    <section class="container py-2">
        <div class="row">
            <div class="col-md-12 col-lg-2">
                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                    {{-- Mobile Menu --}}
                    <div class="mobile-menu-wrapper d-block d-lg-none">
                        <button id="mobileMenu" class="btn btn-block btn-success d-block d-lg-none mb-4">{{ __('Ürünler Menü') }} <i class="fa fa-caret-down float-right"></i></button>
                        <ul id="productLeftTabMobile" class="rigthMenu nav nav-pills flex-column">
                            @include('layouts._partials.products.sidebar')
                        </ul>
                    </div>
                    {{-- Desktop Menu --}}
                    <ul id="productLeftTab" class="nav nav-pills flex-column d-none d-lg-block">
                        @include('layouts._partials.products.sidebar')
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-10">
                <div class="tab-content w-100 border-left">
                    <!--Tab Start-->
                    <div id="parentOneSubOne" class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-md-8 text-center">
                                <!--Product Tab Content Start-->
                                <div class="tab-content p-3 w-100">
                                    <div class="tab-pane fade active show">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <img src="{{ asset($product->image) }}" alt="image" />
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="product-title">{{ $product->name }}</div>
                                                <div class="product-text">
                                                    <p>{!! $product->content !!}</p>
                                                </div>
                                                <div class="product-info">
                                                    @if (isset($product->gram) && is_array($product->gram) && count($product->gram))
                                                        <div class="d-inline-block w-auto">
                                                            <select class="form-control grama">
                                                                <?php
                                                                $count=0;
                                                                ?>
                                                                @foreach ($product->gram as $gram)
                                                                    <?php
                                                                    $count++;
                                                                    ?>
                                                                    <option data-id="{{$count}}" value="{{ $gram }}">{{ $gram }}gr</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @endif
                                                    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                                        <script>
                                            $(document).ready(function()
                                            {
                                               $(".grama").change(function (){
                                                   var deger=$(this).find('option:selected').data('id');
                                                   if(deger==1)
                                                   {
                                                     $('.w-auto_1').css("display","block");
                                                     $('.a_1').css("display","block");
                                                       $('.w-auto_2').css("display","none");
                                                       $('.a_2').css("display","none");
                                                       $('.w-auto_3').css("display","none");
                                                       $('.a_3').css("display","none");
                                                   }
                                                   if(deger==2)
                                                   {
                                                       $('.w-auto_1').css("display","none");
                                                       $('.a_1').css("display","none");
                                                       $('.w-auto_2').css("display","block");
                                                       $('.a_2').css("display","block");
                                                       $('.w-auto_3').css("display","none");
                                                       $('.a_3').css("display","none");
                                                   }
                                                   if(deger==3)
                                                   {
                                                       $('.w-auto_1').css("display","none");
                                                       $('.a_1').css("display","none");
                                                       $('.w-auto_2').css("display","none");
                                                       $('.a_2').css("display","none");
                                                       $('.w-auto_3').css("display","block");
                                                       $('.a_3').css("display","block");
                                                   }
                                               }) ;
                                            });
                                        </script>
                                                    <?php
                                                    $countbarkod=0;
                                                    ?>
                                                    @foreach(explode(',',$product->barcode) as $info)
                                                        <?php
                                                        $countbarkod++;
                                                        ?>
                                                            @if($countbarkod==1)
                                                    <div class="d-inline-block w-auto_{{$countbarkod}}"  style="display:block">
                                                        <span class="product-barcode ml-3 a_{{$countbarkod}}" style="display:block">{{ __('Ürün Barkodu') }}:
                                                            <span class="a_{{$countbarkod}}" style="display:block">{{ $info}}</span>
                                                        </span>
                                                    </div>
                                                            @else
                                                                <div class="d-inline-block w-auto_{{$countbarkod}}" style="display:none">
                                                        <span class="product-barcode ml-3 a_{{$countbarkod}}"  style="display:none">{{ __('Ürün Barkodu') }}:
                                                            <span class="a_{{$countbarkod}}" style="display:none">{{ $info}}</span>
                                                        </span>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    <a href="#"><i class="fa fa-cart-plus"></i> {{ __('Satın Al') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product Tab Content End-->
                            </div>
                            <div class="col-md-4">
                                <span class="other-products-title d-block text-uppercase text-center font-weight-bold">Diğer Ürünler</span>
                                <div class="other-products-wrapper">
                                    <ul class="nav nav-pills justify-content-center">
                                        @foreach ($otherProducts as $otherProduct)
                                            <li class="nav-item d-block">
                                                <a href="{{ route('frontend.product.show', $otherProduct->slug) }}" class="nav-link small d-inline-block">
                                                    <figure class="figure">
                                                        <img src="{{ asset($otherProduct->image) }}" class="figure-img img-fluid" alt="image" />
                                                        <figcaption class="figure-caption">{{ $otherProduct->name }}</figcaption>
                                                    </figure>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab End-->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
