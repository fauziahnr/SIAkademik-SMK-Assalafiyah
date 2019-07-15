<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama_depan', 50);
            $table->string('nama_belakang', 30);
            $table->string('jenis_kelamin', 30);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->text('alamat', 100);
            $table->string('kelurahan', 30);
            $table->string('pekerjaan', 30);
            $table->string('agama', 10);
            $table->string('status_kawin', 20);
            $table->string('gambar',50)->nullable();
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
        Schema::dropIfExists('penduduks');
    }
}
