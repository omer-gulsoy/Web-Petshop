<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
    lang="tr"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('templates(admin)/assets/') }}/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Yönetici Paneli</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/img/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates(admin)/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('templates(admin)/assets/vendor/js/helpers.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('templates(admin)/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="home   " class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('template/img/logo2.png') }}" alt="Logo" width="50" />
                        </span>

                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Evcil Sepeti</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-item">
                        <a href="home" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="Basic">Anasayfa</div>
                        </a>
                    </li>


                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Ürün Yönetimi</span>
                    </li>

                    <li class="menu-item">
                        <a href="product" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div data-i18n="Basic">Ürünleri Düzenle</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">İletişim Formu</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="form" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-message"></i>
                            <div data-i18n="Basic">Form Yanıtları</div>
                        </a>
                    </li>

                    <!-- Çıkış components -->
                    <li class="menu-item">
                        <a
                            href="{{ url('/home') }}"
                            class="menu-link">
                            <i class="menu-icon tf-icons bx bx-exit"></i>
                            <div data-i18n="Support">Çıkış Yap</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Yönetici Paneli  </span>
                    </h4>
                    @yield('content')
                </div>
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Evcil Sepeti. Yapımcı
                            <a href="https://www.linkedin.com/in/omer-h-gulsoy/" target="_blank" class="footer-link fw-bolder">Ömer Hasan GÜLSOY</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('templates(admin)/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('templates(admin)/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('templates(admin)/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('templates(admin)/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('templates(admin)/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('templates(admin)/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('templates(admin)/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('templates(admin)/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Dış Kaynak -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>