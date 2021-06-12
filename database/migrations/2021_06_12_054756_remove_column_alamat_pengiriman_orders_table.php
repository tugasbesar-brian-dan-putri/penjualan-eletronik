<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnAlamatPengirimanOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_alamat_pengiriman_id_foreign');
            $table->dropColumn('alamat_pengiriman_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('alamat_pengiriman_id');
            $table->foreign('alamat_pengiriman_id')->references('id')->on('alamat_pengiriman');
        });
    }
}