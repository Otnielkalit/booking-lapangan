@extends('publik.layouts.master')

@section('content')
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Tuhor Hamu <br>Jo Bos</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="assets-publik/img/banner/sepatu-futsal.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Sepatu Basket<br>Mantap!</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="assets-publik/img/banner/sepatu-basket.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Anda Bisa Booking Lapangan Juga</h1>
                        </div>
                    </div>
                    <a href="" class="primary-btn">Booking Now</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="assets-publik/img/product/volly.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h4>Rp150.000</h4>
                                </div>
                                <h4>Bola Volly</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="{{ route('publik.produk-detail') }}"><span
                                            class="ti-bag"></span></a>
                                    <a href="{{ route('publik.produk-detail') }}"><span class="add-text text-uppercase">Add
                                            to Bag</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="assets-publik/img/product/futsal.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h4>RP1.500.000</h4>
                                </div>
                                <h4>Bola Futsal</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="{{ route('publik.produk-detail') }}"><span
                                            class="ti-bag"></span></a>
                                    <a href="{{ route('publik.produk-detail') }}"><span class="add-text text-uppercase">Add
                                            to Bag</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="assets-publik/img/brand/1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="assets-publik/img/brand/2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="assets-publik/img/brand/3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="assets-publik/img/brand/4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="assets-publik/img/brand/5.png" alt="">
                </a>
            </div>
        </div>
    </section>
@endsection
