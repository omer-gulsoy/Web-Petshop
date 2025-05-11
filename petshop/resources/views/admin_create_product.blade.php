@extends('layouts.app_admin')

@section('content')
<h2>Yeni Ürün Ekle</h2>
<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Ürün Adı</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="description">Açıklama</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label for="price">Fiyat</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" class="form-control" id="stock" name="stock" required>
    </div>

    <div class="form-group">
        <label for="image">Görsel</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <div class="form-group">
        <label for="status">Durum</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Ekle</button>
</form>
@endsection