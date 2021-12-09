@extends('master')

@section('title', 'Kategoriler')

@section('add-button', route('categories.create'))

@section('content')
<div class="card-body">
    @if(request('parent_id'))
        <a href="{{ route('categories.index') }}" class="btn btn-block btn-warning mb-2">
            &laquo; Ana Listeye Dön
        </a>
        @isset($categories->first()->parent->title)
            <h4 class="text-center">Üst Kategori: 
                <b>
                    @multilingualList(['attribute' => 'title', 'model' => $categories->first()->parent])
                </b>
            </h4>
        @endisset
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Kategori Başlığı</th>
                <th>Url</th>
                <th width="120">Alt Kategoriler</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => $category])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'slug', 'model' => $category])
                    </td>
                    <td class="text-center">
                        @if($category->descendants->count())
                            <a href="{{ route('categories.index', ['parent_id' => $category->id]) }}" class="btn btn-sm btn-block btn-info">
                                LİSTELE <span class="badge badge-light">{{ $category->children->count() }}</span>
                            </a>
                        @else
                            <span class="badge badge-secondary">YOK</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('categories.destroy', $category->id) }}" data-method="delete" data-confirm="DİKKAT!!! Kategoriyi sildiğinizde beraberinde alt kategorileride silinecektir! Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
