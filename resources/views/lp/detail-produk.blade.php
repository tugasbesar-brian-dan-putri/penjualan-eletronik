@extends('layouts.lp.main')

@section('title', 'Tentang Kami')

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Detail Produk</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('beranda')}}">Beranda</a></li>
                        <li>{{$produk->nama}}</li>
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
                            <img src="{{asset('storage/produk/'. $produk->gambar)}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-4 col-md-12">
                <div class="product-details-content">
                    <h2>{{$produk->kategori->nama}}</h2>
                    <h1>{{$produk->nama}}</h1>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">Rp {{number_format($produk->harga, 0, ',', '.')}}</li>
                        </ul>
                    </div>
                    <hr>
                    <p>{{$produk->deskripsi}}</p>
                    <hr>
                    {{-- <div class="pro-details-list">
                        <ul>
                            <li>- 0.5 mm Dail</li>
                            <li>- Inspired vector icons</li>
                            <li>- Very modern style</li>
                        </ul>
                    </div> --}}
                    <div class="pro-details-quality mt-3">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" min="1" />
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
