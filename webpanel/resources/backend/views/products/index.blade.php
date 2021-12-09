@extends('master')

@section('title', 'Ürünler')

@section('add-button', route('products.create'))

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Ürün Adı</th>
                <th>Url</th>
                <th>Kategori</th>
                <th width="50">Resim</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'name', 'model' => $product])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'slug', 'model' => $product])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => optional($product)->category])
                    </td>
                    <td>
                        <img src="{{ asset($product->image) }}" class="img-fluid">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('products.destroy', $product->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
