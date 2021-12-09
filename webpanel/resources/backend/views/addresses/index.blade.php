@extends('master')

@section('title', 'Adresler')

@section('add-button', route('addresses.create'))

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Başlık</th>
                <th>E-Posta</th>
                <th>Telefon</th>
                <th>Fax</th>
                <th>Adres</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <td>{{ $address->id }}</td>
                    <td>
                        @multilingualList(['attribute' => 'title', 'model' => $address])
                    </td>
                    <td>{{ $address->email }}</td>
                    <td>{{ $address->phone }}</td>
                    <td>{{ $address->fax }}</td>
                    <td>{{ strip_tags($address->address) }}</td>
                    <td class="text-center">
                        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('addresses.destroy', $address->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
