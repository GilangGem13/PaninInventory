<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('table_list_barang', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Barang');
            $table->string('Jumlah_Barang');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('table_list_barang');
    }
};
