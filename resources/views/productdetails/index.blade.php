@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--product details start-->
    {{-- <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/details-1.jpg" data-zoom-image="assets/img/product/details-1.jpg" alt="big-1">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">

                            <h1>Fancy Chair for astron floor</h1>

                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>

                            </div>
                            <div class="product_desc">

                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>





                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--product details end-->

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/index">home</a></li>
                        <li>Product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<div class="product_details mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="https://seringjalan.com/wp-content/uploads/2020/05/5-BAJU-PENGANTIN-ADAT-JAWA-TENGAH-idntimes-com.jpg"
                                data-zoom-image="https://seringjalan.com/wp-content/uploads/2020/05/5-BAJU-PENGANTIN-ADAT-JAWA-TENGAH-idntimes-com.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="assets/img/product/details-2.jpg"
                                    data-zoom-image="assets/img/product/details-2.jpg">
                                    <img src="assets/img/product/details-2.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="assets/img/product/details-3.jpg"
                                    data-zoom-image="assets/img/product/details-3.jpg">
                                    <img src="assets/img/product/details-3.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="assets/img/product/details-4.jpg"
                                    data-zoom-image="assets/img/product/details-4.jpg">
                                    <img src="assets/img/product/details-4.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="assets/img/product/details-1.jpg"
                                    data-zoom-image="assets/img/product/details-1.jpg">
                                    <img src="assets/img/product/details-1.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="#">

                        <h1>pernikahan adat jawa</h1>
                        <div class=" product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="review"><a href="#"> (250 reviews) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            <span class="current_price">Rp.80.0000.000</span>
                            <span class="old_price">Rp.100.0000.000</span>

                        </div>
                        <div class="product_desc">
                            <ul>
                                <li>In Stock</li>
                                <li>Free 1 baju*</li>
                                <li>Sale 30% Off Use Code : 'Drophut'</li>
                            </ul>
                            <p>Pernikahan adat Jawa adalah perayaan yang memukau, dipenuhi dengan kekayaan budaya dan spiritualitas yang mendalam. Dengan prosesi yang khas seperti siraman, midodareni, dan akad nikah, setiap langkah diatur dengan cermat untuk mencerminkan kehormatan terhadap leluhur dan kepatuhan terhadap tradisi. Busana pengantin yang megah dan warna-warna yang bersemangat seperti merah dan kuning melambangkan kebahagiaan dan kemakmuran. Dalam pernikahan adat Jawa, tidak hanya dua individu yang bersatu, tetapi juga dua keluarga dan
                                 dua komunitas yang menyatu dalam kebersamaan dan harapan akan masa depan yang gemilang. </p>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2023/12/15"></div>
                        </div>
                        <div class="product_variant color">
                            <h3>Available Options</h3>
                            <label>color</label>
                            <ul>
                                <li class="color1"><a href="#"></a></li>
                                <li class="color2"><a href="#"></a></li>
                                <li class="color3"><a href="#"></a></li>
                                <li class="color4"><a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number">
                            <button class="button" type="submit"><a href="/checkout">Buat Pesanan</a></button>
                            {{-- <button class="button" type="submit">add to cart</button> --}}

                        </div>
                        <div class=" product_d_action">
                            <ul>
                                <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                            </ul>
                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="#">Clothing</a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a>
                            </li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a>
                            </li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                    share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <!--product info end-->
@include('layout.footer')
@endsection
