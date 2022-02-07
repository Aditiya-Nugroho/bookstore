<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('judul_buku', 70);
            $table->string('penerbit', 100);
            $table->string('pengarang', 100);
            $table->foreignId('id_kategori');
            $table->date('tahun_terbit');
            $table->integer('harga');
            $table->integer('stok');
            $table->text('cover');
            $table->text('sinopsis');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
