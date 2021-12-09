@extends('master')

@section('title', 'Slider')

@section('add-button', route('sliders.create'))

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Başlık</th>
                <th>Link</th>
                <th width="50">Resim</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => $slider])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'link', 'model' => $slider])
                    </td>
                    <td>
                        <img src="{{ asset($slider->image) }}" class="img-fluid">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('sliders.destroy', $slider->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

@push('js')
    <script>
       multilingual();
    </script>
@endpush
