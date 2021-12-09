@extends('master')

@section('title', 'Kurumsal Sayfalar')

@section('add-button', route('pages.create'))

@section('content')
<div class="card-body">
    @if(request('parent_id'))
        <a href="{{ route('pages.index') }}" class="btn btn-block btn-warning mb-2">
            &laquo; Ana Listeye Dön
        </a>
        @isset($pages->first()->parent->title)
            <h4 class="text-center">Üst Sayfa: 
                <b>
                    @multilingualList(['attribute' => 'title', 'model' => $pages->first()->parent])
                </b>
            </h4>
        @endisset
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Başlık</th>
                <th>Url</th>
                <th width="120">Alt Sayfalar</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => $page])
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'slug', 'model' => $page])
                    </td>
                    <td class="text-center">
                        @if($page->descendants->count())
                            <a href="{{ route('pages.index', ['parent_id' => $page->id]) }}" class="btn btn-sm btn-block btn-info">
                                LİSTELE <span class="badge badge-light">{{ $page->descendants->count() }}</span>
                            </a>
                        @else
                            <span class="badge badge-secondary">YOK</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('pages.destroy', $page->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
