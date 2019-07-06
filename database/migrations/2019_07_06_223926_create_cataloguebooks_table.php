<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCataloguebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cataloguebooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('recommend_id')->unsigned();
            $table->string('kode')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('jenis')->nullable();
            $table->string('subjek')->nullable();
            $table->string('harga_sewa')->nullable();
            $table->string('denda')->nullable();
            $table->string('jenis')->nullable();
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
        Schema::dropIfExists('cataloguebooks');
    }
}
