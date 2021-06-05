<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('header_transaksi_id');
            $table->unsignedBigInteger('produk_id');
            $table->integer('qty')->unsigned()->nullable()->default(1);
            $table->bigInteger('sub_total')->nullable()->default(0);
            $table->enum('status', [0, 1, 2, 3])->nullable()->default(0)->comment('0 = Belum Dibayar, 1 = Dikemas, 2 = Dikirim, 3 = Selesai');
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('header_transaksi_id')->references('id')->on('header_transaksi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}