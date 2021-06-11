@extends('layouts.lp.main')

@section('title', 'Keranjang Belanja')

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Keranjang Belanja</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('beranda')}}">Beranda</a></li>
                        <li>Keranjang Belanja</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<div class="cart-main-area mtb-60px">
    <div class="container">
        <h3 class="cart-page-title">Keranjang belanja Anda saat ini</h3>
        <div class="row">
            <div class="col-md-8">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Satuan</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$itemcart)
                                <tr>
                                    <td colspan="6">Keranjang masih kosong</td>
                                </tr>
                                @else
                                @if (!$itemcart->detail)
                                <tr>
                                    <td colspan="6">Keranjang masih kosong</td>
                                </tr>
                                @else
                                @foreach ($itemcart->detail as $item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="{{route('beranda.detailproduk', $item->produk->id)}}"><img src="{{asset('storage/produk/' . $item->produk->gambar)}}" class="w-50" alt="" /></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$item->produk->nama}}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{number_format($item->produk->harga, 0, ',', '.')}}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$item->qty}}" />
                                        </div>
                                    </td>
                                    <td class="product-subtotal">{{number_format($item->subtotal, 0, ',', '.')}}</td>
                                    <td class="product-remove">
                                        <a href="javascript:void(0)" data-id="{{$item->id}}" class="delete-produk-cart"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('beranda.listproduk')}}" class="bg-primary text-white">Lanjut Shopping</a>
                                </div>
                                @if ($itemcart)
                                <div class="cart-clear">
                                    <a href="javascript:void(0)" class="bg-danger text-white" id="kosong-keranjang" data-id="{{$itemcart->id}}">Kosongkan Keranjang</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="grand-totall">
                    <div class="title-wrap">
                        <h4 class="cart-bottom-title section-bg-gary-cart">Ringkasan Belanja</h4>
                    </div>
                    <h5>No. Invoice <span>{{ isset($itemcart->no_invoice) ? $itemcart->no_invoice : '0' }}</span></h5>
                    <h4 class="grand-totall-title text-success">TOTAL <span>Rp {{ isset($itemcart->total) ? number_format($itemcart->total, 0,',', '.') : '0'}}</span></h4>
                    <a href="#" class="bg-success">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->


@endsection

@section('script')
<script>
    $('.delete-produk-cart').on("click", function() {
        var id_detail_cart = $(this).attr('data-id');
        $.ajax({
            type: "DELETE"
            , url: `${APP_URL}/detail-cart/${id_detail_cart}`
            , data: {
                id: id_detail_cart
            }
            , success: function(res) {
                window.location.href = `${APP_URL}/cart`;
            }
        });
    });

    $('#kosong-keranjang').on("click", function() {
        var id_cart = $(this).attr('data-id');
        $.ajax({
            type: "POST"
            , url: `${APP_URL}/kosongkan-keranjang/${id_cart}`
            , data: {
                id: id_cart
                , _method: "PUT"
            }
            , success: function(res) {
                window.location.href = `${APP_URL}/cart`;
            }
        });
    });

</script>
@endsection
