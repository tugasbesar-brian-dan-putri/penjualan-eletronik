@extends('layouts.lp.main')

@section('title', 'Beranda')

@section('content')
<!-- Slider Arae Start -->
<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img" style="background-image: url({{asset('templates/landing-page')}}/images/slider-image/sample-23.jpg);">
            <div class="container">
                <div class="slider-content-5 slider-animated-1 text-left">
                    <span class="animated">BOSE SOUND SPORTS</span>
                    <h1 class="animated">
                        <strong>SPORTS DARBUDS</strong><br /> Headphones Bluetooth
                    </h1>
                    <p class="animated">Anti-Falling Of Design Sweatproof</p>
                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
    </div>
</div>
<!-- Slider Arae End -->
<!-- Category Tab Area Start -->
<section class="category-tab-area mt-60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>Produk Terpopuler</h2>
                    <p>Tambahkan produk terpopuler ini ke keranjang kamu</p>
                </div>
                <!-- Section Title Start -->
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- 1st tab start -->
            <div id="accessories" class="tab-pane active">
                <!-- Best Sell Slider Carousel Start -->
                <div class="best-sell-slider owl-carousel owl-nav-style">
                    <!-- Single Item -->
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('produk.show', 1)}}" class="thumbnail">
                                <img class="first-img" src="{{asset('templates/landing-page')}}/images/product-image/electronic/2.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        {{-- <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul> --}}
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="{{route('produk.show', 1)}}" class="product-link">Juicy Couture Juicy Quilted Ter..</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">€34.21</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">Tambah Ke Keranjang </a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('produk.show', 1)}}" class="thumbnail">
                                <img class="first-img" src="{{asset('templates/landing-page')}}/images/product-image/electronic/1.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        {{-- <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul> --}}
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="{{route('produk.show', 1)}}" class="product-link">Juicy Couture Juicy Quilted Ter..</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">€34.21</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">Tambah Ke Keranjang </a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Best Sell Slider Carousel End -->
            </div>
        </div>
    </div>
</section>
<!-- Category Tab Area end -->

@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="{{asset('templates/landing-page')}}/images/product-image/electronic/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Originals Kaval Windbr</h2>
                            <h1>Windbr</h1>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-quality">
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
        </div>
    </div>
</div>
<!-- Modal end -->

@endsection
