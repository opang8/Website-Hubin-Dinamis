<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn');
            $table->string('jenis_kelamin');
            $table->string('angkatan');
            $table->longText('alamat');
            $table->string('no_telepon');
            $table->longText('kota_kabupaten');
            $table->longText('keahlian');
            $table->string('kebutuhan');
            $table->string('karya');
            $table->longText('kepribadian');
            $table->string('jurusan');
            $table->string('foto');
            $table->string('email');
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
        Schema::dropIfExists('resume');
    }
}
