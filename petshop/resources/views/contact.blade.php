@extends('layouts.app')

@section('content')

<!-- İletişim Başlangıcı -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Bize Ulaşın</h6>
            <h1 class="display-5 text-uppercase mb-0">Bize Ulaşmaktan Çekinmeyin</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="İsminiz" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input name="surname" type="text" class="form-control bg-light border-0 px-4" placeholder="Soyisminiz" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input name="email" type="email" class="form-control bg-light border-0 px-4" placeholder="E-Posta Adresiniz" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input name="subject" type="text" class="form-control bg-light border-0 px-4" placeholder="Konu" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control bg-light border-0 px-4 py-3" rows="8" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Mesaj Gönder</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-5">
                <div class="bg-light mb-5 p-5">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Adresimiz</h6>
                            <span>İzmit, Kocaeli, Türkiye</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">E-Posta Adresimiz</h6>
                            <span>info@evcilsepeti.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Telefon Numaramız</h6>
                            <span>+90 262 4141</span>
                        </div>
                    </div>
                    <div>
                        <iframe class="position-relative w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49037.79169277175!2d29.893301443595092!3d40.771171677209715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4f66644bfb9d%3A0x82690ee7586b7eb9!2zxLB6bWl0LCBLb2NhZWxp!5e1!3m2!1str!2str!4v1746796091114!5m2!1str!2str"
                            frameborder="0" style="height: 205px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- İletişim Sonu -->

@endsection