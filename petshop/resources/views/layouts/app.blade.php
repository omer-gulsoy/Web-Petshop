<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Evcil Sepeti</title>

    <!-- Favicon -->
    <link href="{{ asset('template/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>


<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Adresimiz</h6>
                        <span>İzmit, Kocaeli, Türkiye</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">E-Posta Adresimiz</h6>
                        <span>info@evcilsepeti.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Telefon Numaramız</h6>
                        <span>+90 262 4141</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="home" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><img src="{{ asset('template/img/logo2.png') }}" alt="Pet Shop Logo" class="fs-1 text-primary me-3">
            </i>Evcil Sepeti</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="home" class="nav-item nav-link">Anasayfa</a>
                <a href="about" class="nav-item nav-link">Hakkımızda</a>
                <a href="services" class="nav-item nav-link">Hizmetlerimiz</a>
                <a href="products" class="nav-item nav-link">Ürünlerimiz</a>
                <a href="contact" class="nav-item nav-link">İletişim</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div> -->
                <a href="login" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Giriş Yap <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">İletişim</h5>
                    <p class="mb-4">Bizimle iletişime geçmek için formu doldurun veya aşağıdaki bilgileri kullanın</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>İzmit, Kocaeli, Türkiye</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@evcilsepeti.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+90 262 4141</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Hızlı Linklers</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="home"><i class="bi bi-arrow-right text-primary me-2"></i>Anasayfa</a>
                        <a class="text-body mb-2" href="about"><i class="bi bi-arrow-right text-primary me-2"></i>Hakkımızda</a>
                        <a class="text-body mb-2" href="services"><i class="bi bi-arrow-right text-primary me-2"></i>Hizmetlerimiz</a>
                        <a class="text-body mb-2" href="products"><i class="bi bi-arrow-right text-primary me-2"></i>Ürünlerimiz</a>
                        <a class="text-body mb-2" href="products"><i class="bi bi-arrow-right text-primary me-2"></i>Teklifler</a>
                        <a class="text-body" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>İletişim</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popüler Linkler</h5>
                    <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="home"><i class="bi bi-arrow-right text-primary me-2"></i>Anasayfa</a>
                    <a class="text-body mb-2" href="products"><i class="bi bi-arrow-right text-primary me-2"></i>Teklifler</a>
                    <a class="text-body mb-2" href="about"><i class="bi bi-arrow-right text-primary me-2"></i>Hakkımızda</a>
                    <a class="text-body mb-2" href="products"><i class="bi bi-arrow-right text-primary me-2"></i>Ürünlerimiz</a>
                    <a class="text-body mb-2" href="services"><i class="bi bi-arrow-right text-primary me-2"></i>Hizmetlerimiz</a>
                    <a class="text-body" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>İletişim</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Abonelik</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="E-Posta Adresiniz">
                            <button class="btn btn-primary">Kaydol</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Bizi Takip Edin</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Şartlar & Koşullar</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Gizlilik Poliçesi</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Müşteri Hizmetleri</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Ödeme</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Yardım</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">SSS</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy;Evcil Sepeti. Tüm hakları saklıdır.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Yapımcı:  <a class="text-white" target="_blank" href="https://www.linkedin.com/in/omer-h-gulsoy/">Ömer Hasan GÜLSOY</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>