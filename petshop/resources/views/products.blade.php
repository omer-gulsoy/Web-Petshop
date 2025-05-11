@extends('layouts.app')

@section('content')

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Ürünlerimiz</h6>
            <h1 class="display-5 text-uppercase mb-0">Dostlarımız İçin Ürünler</h1>
        </div>

        <div class="owl-carousel product-carousel">
            @foreach($products as $product)
            <div class="pb-5">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <h6 class="text-uppercase">{{ $product->name }}</h6>
                    <h5 class="text-primary mb-0">{{ number_format($product->price, 2) }}₺</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Products End -->



    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Özel Teklif</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">İlk sipraişte %20 indirim</h1>
                    </div>
                    <p class="text-white mb-4">İlk siparişinizde %20 indirim fırsatını kaçırmayın! Hem evcil dostlarınıza hem de bütçenize uygun seçeneklerle alışveriş keyfi sizi bekliyor. Hemen sipariş verin, avantajları yakalayın!</p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Ürünler</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    @endsection