@extends('master')

@section('title', 'Anasayfa Ürünleri')

@section('add-button', route('home-products.create'))

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Başlık</th>
                <th>Alt Başlık</th>
                <th width="50">Resim</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homeProducts as $homeProduct)
                <tr>
                    <td>{{ $homeProduct->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => $homeProduct])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'subtitle', 'model' => $homeProduct])
                    </td>
                    <td>
                        <img src="{{ asset($homeProduct->image) }}" class="img-fluid">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('home-products.edit', $homeProduct->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('home-products.destroy', $homeProduct->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
