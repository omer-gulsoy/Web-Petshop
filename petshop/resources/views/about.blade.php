@extends('layouts.app')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('template/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Hakkımızda</h6>
                        <h1 class="display-5 text-uppercase mb-0">Evcil Hayvanlarınızı Mutlu Ediyoruz</h1>
                    </div>
                    <h4 class="text-body mb-4">Evcil hayvanlarınızın ihtiyaçlarını en iyi şekilde karşılamak için kaliteli ürünler sunuyoruz</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Misyonumuz</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Vizyonumuz</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Evcil hayvanların sağlıklı ve mutlu bir yaşam sürmesi için kaliteli ürünler ve hizmetler sunmayı hedefliyoruz. Her adımda, onların ihtiyaçlarını karşılamak ve yaşam kalitelerini artırmak için çalışıyoruz. İleriye dönük, sürekli gelişim ve müşteri memnuniyeti odaklı bir yaklaşım benimseyerek sektördeki liderliğimizi sürdüreceğiz</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Evcil hayvanlar için en kaliteli ve güvenilir ürünleri sunan, sektörde lider bir marka olmayı hedefliyoruz. Müşteri memnuniyeti ve hayvan sağlığı odaklı yaklaşımımızla her zaman en iyiyi sunmaya devam edeceğiz. Yenilikçi çözümler ve sürdürülebilirlik anlayışıyla sektördeki en güvenilir isimlerden biri olacağız.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
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

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Ekibimiz</h6>
                <h1 class="display-5 text-uppercase mb-0">Dostlarımız İçin Profesyonel Ekibimiz</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('template/img/team-1.jpg') }}" alt="">
                    <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Ecem Su</h5>
                        <p class="m-0">Müdür</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('template/img/team-2.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Elif </h5>
                        <p class="m-0">Satış</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('template/img/team-3.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Meryem </h5>
                        <p class="m-0">Operasyon</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('template/img/team-4.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Fatma</h5>
                        <p class="m-0">Destek</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('template/img/team-5.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Ayşe</h5>
                        <p class="m-0">Pazarlama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    @endsection