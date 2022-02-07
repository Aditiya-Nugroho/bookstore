<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->integer('nik');
            $table->string('nama_customer', 50);
            $table->text('alamat');
            $table->string('jenis_kelamin', 20);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('no_telephone', 15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
