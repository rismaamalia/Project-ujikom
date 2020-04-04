<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Minuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('minumen', function (Blueprint $table) {
         $table->bigIncrements('id');
            $table->unsignedBigInteger('kategori_produks_id');
            $table->foreign('kategori_produks_id')->references('id')->on('kategori_produks')->onDelete('CASCADE');
            $table->string('minuman');
              $table->string('harga');
            $table->text('deskripsi');
            $table->string('foto');
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
        //
    }
}
