<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_masuk', function (Blueprint $table) {
            $table->id('id_buku_masuk');
            $table->foreignId('id_buku');
            $table->integer('qty');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_buku')->references('id_buku')->on('buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_masuk');
    }
}
