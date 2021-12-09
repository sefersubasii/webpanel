@extends('master')

@section('title', 'İletişim Formları')

@section('content')
<div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="15">#</th>
                <th>Ad Soyad</th>
                <th>E-Posta</th>
                <th>Telefon</th>
                <th>Konu</th>
                <th>Mesaj</th>
                <th width="100" class="text-center"><i class="fas fa-cogs"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactForms as $contactForm)
                <tr>
                    <td>{{ $contactForm->id }}</td>
                    <td>{{ $contactForm->name }}</td>
                    <td>{{ $contactForm->email }}</td>
                    <td>{{ $contactForm->phone }}</td>
                    <td>{{ $contactForm->subject }}</td>
                    <td>{{ $contactForm->message }}</td>
                    <td class="text-center">
                        <a href="{{ route('contact-forms.destroy', $contactForm->id) }}" data-method="delete" data-confirm="Silmek istediğinize emin misiniz?" class="btn btn-sm btn-danger">
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
