<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTransaksi extends Model
{
    use HasFactory;

    protected $table = 'header_transaksi';

    protected $fillable = [
        'tgl_header',
        'bukti_transfer'
    ];
}