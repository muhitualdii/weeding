@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>selamat datang di lala wedding</h1>
                            <h2>melakukan persiapan pernikahan mu</h2>
                            <a class="button" href="/productlist">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Best Planning For Wedding</h1>
                            <h2>Lala Wedding</h2>
                            <a class="button" href="/productlist">Shop now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Lala Wedding</h1>
                            <h2>Special on Your Wedding</h2>
                            <a class="button" href="/productlist">shopping now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--Tranding product-->
<section class="pt-60 pb-30" style="background-color: #007bff;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2 style="color: #fff;">Trending Products</h2>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket 1</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket 2</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket 3</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket 4</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket 5</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding mb-30" style="background-color: #fff; padding: 20px; border-radius: 10px;">
                                <a href="/rumahan">
                                    <div class="tranding-pro-img">
                                        <img src="assets/gambarproduk/RUMAHAN.jpg" alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>paket6</h3>
                                        <h4>BOOK NOW</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan item carousel lainnya di sini -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<!--Tranding product-->
@include('layout.footer')
@endsection
