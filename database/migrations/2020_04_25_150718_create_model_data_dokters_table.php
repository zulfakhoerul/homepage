<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelDataDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dokter', function (Blueprint $table) {
            $table->bigIncrements('id_dokter');
            $table->string('foto');
            $table->string('nama_dokter');
            $table->string('spesialis');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('data_dokter');
    }
}
