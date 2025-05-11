@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Evcil Sepeti</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Sevgiyle Doldurulmuş Sepet</h1>
                    <p class="fs-4 text-white mb-lg-4">Evcil dostlarınız için kaliteli ürünler, özenle seçilmiş sepetlerde sizleri bekliyor.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <!-- <a href="" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a> -->
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Videoyu Oynat</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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


    <!-- Pricing Plan Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Standard</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Extended</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pricing Plan End -->


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
<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Son Yazılar</h6>
            <h1 class="display-5 text-uppercase mb-0">Blog Yazımızdan Son Makaleler</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('template/img/blog-1.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Mayıs, 2025</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Evcil Hayvanlarınıza Sağlıklı Bir Yaşam İçin 5 Öneri</h5>
                                <p>Evcil hayvanlarınızın sağlıklı bir yaşam sürmesi için doğru beslenme ve bakım çok önemlidir. Bu yazımızda onlara nasıl daha iyi bakabileceğiniz hakkında 5 pratik öneri bulabilirsiniz.</p>
                                <a class="text-primary text-uppercase" href="">Devam Et<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('template/img/blog-2.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="bi bi-calendar-date me-2"></i>25 Nisan, 2025</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Evcil Hayvanınızın Yedikleri Gıda</h5>
                                <p>Evcil hayvanınıza sağlıklı ve dengeli bir beslenme düzeni sunmak, onların yaşam kalitesini artırır. Bu yazımızda, evcil hayvanlarınıza en uygun gıda seçeneklerini ele alıyoruz.</p>
                                <a class="text-primary text-uppercase" href="">Devam Et<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

    @endsection