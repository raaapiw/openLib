<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama_buku')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('jenis')->nullable();
            $table->string('penyunting')->nullable();
            $table->string('penerjemah')->nullable();
            $table->string('abstrak')->nullable();
            $table->string('kota_penerbit')->nullable();
            $table->integer('votes')->nullable();
            $table->integer('reviews')->nullable();
            $table->string('cover')->nullable();
            $table->LONGTEXT('synopsis')->nullable();
            $table->string('code')->nullable();
            $table->integer('type')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
