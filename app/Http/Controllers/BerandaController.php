<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->limit(6)->latest()->get();
        return view('lp.beranda', compact('produk'));
    }

    public function listProduk()
    {
        $produk = Produk::with('kategori')->latest()->get();
        return view('lp.produk', compact('produk'));
    }

    public function detailProduk($id)
    {
        $produk = Produk::where('id', $id)->with('kategori')->first();
        return view('lp.detail-produk', compact('produk'));
    }
}