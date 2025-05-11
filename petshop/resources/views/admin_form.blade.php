@extends('layouts.app_admin')

@section('content')

<div class="card">
    <h5 class="card-header">Form Yanıt Tablosu</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th>E-Posta Adresi</th>
                    <th>Konu</th>
                    <th>Mesaj</th>
                    <th>Tarih</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($contactForms as $form)
                <tr>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->surname }}</td>
                    <td><a href="mailto:{{ $form->email }}">{{ $form->email }}</a></td>
                    <td>{{ $form->subject }}</td>
                    <td>{{ $form->message }}</td>
                    <td>{{ $form->created_at->format('d F Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection