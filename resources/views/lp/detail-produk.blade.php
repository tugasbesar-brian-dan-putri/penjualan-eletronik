@extends('layouts.lp.main')

@section('title', 'Tentang Kami')

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Single Product Page</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="index.html">Home</a></li>
                        <li>Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- Shop details Area start -->
<section class="product-details-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-8 col-md-12">
                <div class="product-details-img product-details-tab">
                    <div class="zoompro-wrap zoompro-2">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="{{asset('templates/landing-page')}}/images/product-image/organic/product-11.jpg" data-zoom-image="{{asset('templates/landing-page')}}/images/product-image/organic/zoom/1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-4 col-md-12">
                <div class="product-details-content">
                    <h2>Originals Kaval Windbr</h2>
                    <h1>Windbr</h1>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">€18.90</li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                    <div class="pro-details-list">
                        <ul>
                            <li>- 0.5 mm Dail</li>
                            <li>- Inspired vector icons</li>
                            <li>- Very modern style</li>
                        </ul>
                    </div>
                    <div class="pro-details-quality mt-0px">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="#"> + Tambahkan Ke Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop details Area End -->

@endsection
