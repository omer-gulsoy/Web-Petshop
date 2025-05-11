@extends('layouts.app')

@section('content')
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Hizmetlerimiz</h6>
            <h1 class="display-5 text-uppercase mb-0">Evcil Hayvan Bakım Hizmetlerimiz</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-house display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Oteli</h5>
                        <p>Seyahat ederken evcil dostlarınızı güvende tutuyoruz. Konforlu odalar ve 24 saat bakım garantisiyle onları evinizdeki gibi ağırlıyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-food display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Besleme</h5>
                        <p>Dostlarınıza sağlıklı ve dengeli beslenme seçenekleri sunuyoruz. Onların özel ihtiyaçlarına göre hazırlanan yemeklerle beslenmelerini sağlıyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-grooming display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Bakımı</h5>
                        <p>Evcil dostlarınızı hem içten hem dıştan temiz tutuyoruz. Yıkama, tüy bakımı ve tırnak kesimi gibi hizmetlerle onları rahatlatıyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-cat display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Eğitimi</h5>
                        <p>Evcil dostlarınızı eğitmek artık çok kolay! Profesyonel eğitmenlerimizle temel komutları öğretip, onların davranışlarını iyileştiriyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-dog display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Sporu</h5>
                        <p>Sporla hem eğlenceli vakit geçirebilir hem de dostunuzun sağlığını artırabilirsiniz. Egzersiz programları ve oyun saatleriyle onu mutlu ediyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Evcil Hayvan Sağlığı</h5>
                        <p>Dostlarınızın sağlık kontrollerini ihmal etmiyoruz. Aşıları, düzenli sağlık taramaları ve veteriner hizmetleriyle sağlıklı kalmalarını sağlıyoruz.</p>
                        <a class="text-primary text-uppercase" href="">Hizmeti Al<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


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

    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{ asset('template/img/testimonial-1.jpg') }}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>"Bu siteyi bulduğum için çok mutluyum! Evcil hayvanım için kaliteli ve güvenilir ürünler bulmak zor olabiliyor, ancak burada her şey mükemmel. Hızlı kargo ve harika müşteri hizmetleri, tekrar alışveriş yapmamı sağladı."</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Elif Yılmaz</h5>
                            <span>Evcil Hayvan Sahibi</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{ asset('template/img/testimonial-2.jpg') }}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>"Hayvanım için aldığım ürünler gerçekten kaliteli ve uygun fiyatlı. Her seferinde ürünler beklentilerimi aşıyor. Sadece ürünler değil, müşteri destek ekibi de oldukça yardımcı ve hızlı yanıt veriyor!"</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Atilla Demir</h5>
                            <span>Veteriner Hekim</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{ asset('template/img/testimonial-3.jpg') }}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>"Bu siteyi herkese tavsiye ediyorum! Evcil hayvanımın bakımı için ihtiyaç duyduğum her şeyi buradan buluyorum. Kaliteli ve güvenilir bir alışveriş deneyimi sundukları için çok memnunum."</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Ayşe Kaya</h5>
                            <span>Hayvan Bakıcısı</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @endsection