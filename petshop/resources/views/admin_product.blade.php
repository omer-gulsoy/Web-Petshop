@extends('layouts.app_admin')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Ürünler</h5>
        <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">+</a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>İsim</th>
                    <th>Açıklama</th>
                    <th>Fiyat</th>
                    <th>Stok</th>
                    <th>Görsel</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Görsel" width="60">
                        @else
                        Yok
                        @endif
                    </td>

                    <td>{{ $product->status ? 'Aktif' : 'Pasif' }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                        <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger active btn-sm">Sil</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection