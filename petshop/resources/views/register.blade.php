@extends('layouts.app')

@section('content')

<!-- Kayıt Formu Başlangıç -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5 mx-auto" style="max-width: 400px;">
            <h6 class="text-primary text-uppercase">Kaydol</h6>
            <h1 class="display-5 text-uppercase mb-0">Sisteme<br> Kaydolun</h1>
        </div>

        <div class="row g-5 justify-content-center">
            <div class="col-lg-4">
                <form action="{{ route('register.perform') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="name" class="form-control bg-light border-0 px-4" placeholder="İsminiz" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="E-Posta Adresiniz" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control bg-light border-0 px-4" placeholder="Parolanız" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Kaydol</button>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Hesabınız var mı?</span>
                            <a class="text-primary text-uppercase" href="{{ url('/login') }}">
                                Giriş Yapın <i class="bi bi-chevron-right"></i>
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
<!-- Kayıt Formu Sonu -->

@endsection