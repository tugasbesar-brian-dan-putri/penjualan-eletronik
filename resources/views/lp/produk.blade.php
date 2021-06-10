@extends('layouts.lp.main')

@section('title', 'Daftar Produk')


@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Daftar Produk</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('beranda')}}">Beranda</a></li>
                        <li>Daftar Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

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
        @if ($produk->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    Data produk masih kosong.
                </div>
            </div>
        </div>
        @else
        <div class="tab-content">
            <div id="accessories" class="tab-pane active">
                <div class="best-sell-slider owl-carousel owl-nav-style">
                    @foreach ($produk as $item)
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('beranda.detailproduk', $item->id)}}" class="thumbnail">
                                <img class="first-img" src="{{asset('storage/produk/' . $item->gambar)}}" alt="" />
                            </a>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span class="text-uppercase">{{$item->kategori->nama}}</span></a>
                            <h2><a href="{{route('produk.show', 1)}}" class="product-link">{{$item->nama}}</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">Rp {{number_format($item->harga, 0, ',', '.')}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">Tambah Ke Keranjang </a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

    </div>
</section>
<!-- Category Tab Area end -->

@endsection
