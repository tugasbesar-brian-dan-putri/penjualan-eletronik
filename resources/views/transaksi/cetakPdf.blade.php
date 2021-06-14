@extends('layouts.dashboard.main')

@section('title', 'Detail Produk')

@section('content')
<div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Transaksi</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row p-4">
                            <div class="col-12">
                                <table id="table-transaksi" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pembeli</th>
                                            <th>No. Invoice</th>
                                            <th>Jumlah Produk</th>
                                            <th>Total</th>
                                            <th>Status Pembayaran</th>
                                            <th>Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection