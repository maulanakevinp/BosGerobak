<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('logo_perusahaan');
            $table->text('judul_testimoni');
            $table->text('deskripsi_testimoni')->nullable();
            $table->text('judul_brands');
            $table->text('deskripsi_brands')->nullable();
            $table->text('deskripsi_kategori');
            $table->string('link_facebook',60)->nullable();
            $table->string('link_instagram',60)->nullable();
            $table->string('link_twitter',60)->nullable();
            $table->string('link_youtube',60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilities');
    }
}
