@extends('layouts.app_admin')

@section('content')

<form action="{{ route('admin.product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Ürün İsmi</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Açıklama</label>
        <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Fiyat</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
    </div>
    <div class="form-group">
        <label for="status">Durum</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1" {{ $product->status ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ !$product->status ? 'selected' : '' }}>Pasif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ürün Güncelle</button>
</form>

@endsection
