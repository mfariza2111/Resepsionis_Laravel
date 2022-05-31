<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsionisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resepsionis', function (Blueprint $table) {
            $table->id();
            $table->int('nama');
            $table->varchar('nik');
            $table->text('alamat');
            $table->varchar('umur');
            $table->enum('jeniskelamin');
            $table->varchar('status');
            $table->date('waktu');
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
        Schema::dropIfExists('resepsionis');
    }
}
