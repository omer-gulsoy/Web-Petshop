@extends('layouts.app_admin')

@section('content')

<form action="{{ route('admin.product.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Ürün İsmi</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Açıklama</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Fiyat</label>
        <input type="text" name="price" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" name="stock" id="stock" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Durum</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ürün Ekle</button>
</form>

@endsection
