@extends('master')

@section('title', 'Sosyal Medya')

@section('add-button', route('social-media.create'))

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Başlık</th>
                <th>Link</th>
                <th width="50">İkon</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socialMedia as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        @multilingualList(['attribute' => 'link', 'model' => $item])
                    </td>
                    <td class="text-center">
                        <i class="fab fa-{{ $item->icon }}"></i>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('social-media.edit', $item->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('social-media.destroy', $item->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
