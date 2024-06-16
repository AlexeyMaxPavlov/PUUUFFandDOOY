@extends('layout')

@section('title')PUUUFF and DOOY | Главная@endsection
{{--@section('RS_headincludes')--}}
{{--    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->--}}
{{--    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />--}}
{{--    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">--}}
{{--    <!-- ADD-ONS CSS FILES -->--}}
{{--    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/addons/revolution.addon.particles.css">--}}
{{--@endsection--}}

<!-- Slider
		============================================= -->
<section id="slider" class="slider-element swiper_wrapper min-vh-100" data-loop="true" data-speed="1000" data-autoplay="10000">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Premium Classic Shoe</h2>
                            <p class="mb-4" data-animate="fadeInUp" data-delay="100">A New Collection of Summer 2019.</p>
                            <div>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('images/a-painting-of-a-mountain-lake-with-a-mountain-in-the-background.jpg');"></div>
                </div>
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">New Sports Collection</h2>
                            <p class="mb-4" data-animate="fadeInUp" data-delay="100">Black &amp; White Collections</p>
                            <div>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.6)), url('images/beautiful-nature-landscape-with-mountains-and-lake.jpg');"></div>
                </div>
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Latest Sweatshirts</h2>
                            <p class="mb-4" data-animate="fadeInUp" data-delay="100">Collections for Summer Clothes</p>
                            <div>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Men</a>
                                <a href="demo-store-products.html" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light">Shop Women</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('images/majestic-mountain-range-reflects-tranquil-sunset-wave-generated-by-ai.jpg');"></div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>

        <div class="social-icons">
            <a href="#" class="social-icon si-small si-borderless si-rounded si-facebook">
                <i class="icon-facebook text-white-50"></i>
                <i class="icon-facebook"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless si-rounded si-instagram">
                <i class="icon-instagram text-white-50"></i>
                <i class="icon-instagram"></i>
            </a>
            <a href="#" class="social-icon si-small si-borderless si-rounded si-youtube">
                <i class="icon-youtube text-white-50"></i>
                <i class="icon-youtube"></i>
            </a>
        </div>

    </div>
</section><!-- #Slider End -->

@section('content')
    <h1>Hello World</h1>
@endsection
