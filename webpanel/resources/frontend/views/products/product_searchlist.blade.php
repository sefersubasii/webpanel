@extends('layouts.page')

@section('content')



    <div class="searchPage">
        <div class="container py-4">
            <div class="row">

                <div class="col-12 my-4">
                    <p class="searchPageTotal">Gösterilen ve bulunan toplam {{count($data)}} arama sonucu</p>
                </div>
                @foreach($data as $datavalue)
                    <?php
                    $count=count(\App\Helper\mHelper::categoryGetname($datavalue->category_id))
                    ?>
                <div class="col-12 bb py-4">
                    <div class="searchProductBox">
                        <div class="searchProductBox__Img">
                            <img class="img-fluid" src="{{asset($datavalue->image)}}" alt="{!!$datavalue->name!!}">
                        </div>
                        <div class="searchProductBox__Text">
                            <span class="searchProductBox__Text-title">{!!$datavalue->name!!}</span>
                            <p>
                                {!!$datavalue->content!!}
                            </p>
                            <span class="searchProductBox__Text-way">
                                        <strong>Kategori:</strong>
                                <?php
                                $countx=0;
                                ?>
                                @foreach(\App\Helper\mHelper::categoryGetname($datavalue->category_id) as $key=>$value)
                                    <?php
                                    $countx++;
                                    if($countx==$count)
                                        {
                                       ?>
                                        <a href="urunlerimiz/p/{{$value["slug"]}}">{{$value["title"]}} </a>
                                         <?php
                                        }
                                    else
                                        {
                                            ?>
                                            <a href="urunlerimiz/p/{{$value["slug"]}}">{{$value["title"]}} / </a>
                                    <?php
                                        }
                                    ?>
                                @endforeach
                                    </span>
                            <a class="goDetail" href="{{$datavalue->slug}}">Ürün Detayı</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 mt-4">
                    <div class="pagination">
                        <a href="#" class="item"><</a>
                        <a href="#" class="item">1</a>
                        <a href="#" class="item">></a>
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
