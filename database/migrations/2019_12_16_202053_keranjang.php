<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keranjang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_keranjang',function(Blueprint $table){
        $table->engine = 'InnoDB'; // Should not be $table->engine('InnoDB');

        $table->increments('id_keranjang');
        $table->string('id_user');
        $table->string('id_barang');
        $table->string('jumlah');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
