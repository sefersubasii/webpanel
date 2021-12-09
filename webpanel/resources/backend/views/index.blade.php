@extends('master')

@section('blank_content')
<div class="row">
    @foreach ($widgets as $widget)
        <div class="col-lg-3 col-6">
            <div class="small-box bg-{{ $widget['bg'] }}">
                <div class="inner">
                    <h3>{{ $widget['count'] }}{{-- <sup style="font-size: 20px">%</sup> --}}</h3>
                    <p>{{ $widget['title'] }}</p>
                </div>
                <div class="icon">
                    <i class="ion {{ $widget['icon'] }}"></i>
                </div>
                <a href="{{ $widget['url'] }}" class="small-box-footer">Görüntüle <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    @endforeach
</div>
@endsection
