@extends('layouts.app_admin')

@section('content')
<div class="row mb-5">
    <div class="col-md-6 col-lg-6">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Ürünleri Düzenle</h5>
                <p class="card-text">Sitede listelenen ürünleri ekleyin, güncelleyin veya kaldırın.</p>
                <a href="product" class="btn btn-primary">Ürün Yönetimi</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Form Yanıtları</h5>
                <p class="card-text">Kullanıcılar tarafından gönderilen iletişim formlarını görüntüleyin.</p>
                <a href="form" class="btn btn-primary">Yanıtları Görüntüle</a>
            </div>
        </div>
    </div>
</div>


@endsection