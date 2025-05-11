@extends('layouts.app')

@section('content')

<!-- İletişim Başlangıcı -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5 mx-auto" style="max-width: 400px;">
            <h6 class="text-primary text-uppercase">Giriş Yap</h6>
            <h1 class="display-5 text-uppercase mb-0">Sisteme<br> Giriş Yapın</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-4">
                
                <form method="POST" action="{{ route('login.perform') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="E-Posta Adresiniz" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control bg-light border-0 px-4" placeholder="Parolanız" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Giriş Yap</button>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Hesabınız yok mu?</span>
                            <a class="text-primary text-uppercase" href="{{ url('/register') }}">
                                Kaydolun <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger mt-3 w-100">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- İletişim Sonu -->

@endsection