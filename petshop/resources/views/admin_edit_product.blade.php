@extends('layouts.app_admin')

@section('content')
<h2>Ürün Düzenle</h2>
<form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Ürün Adı</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
    </div>

    <div class="form-group">
        <label for="description">Açıklama</label>
        <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Fiyat</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
    </div>

    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
    </div>

    <div class="form-group">
        <label for="image">Görsel</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    @if($product->image)
    <img src="{{ asset('storage/' . $product->image) }}" alt="Ürün Görseli" width="150">
    @endif


    <div class="form-group">
        <label for="status">Durum</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Pasif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>
@endsection