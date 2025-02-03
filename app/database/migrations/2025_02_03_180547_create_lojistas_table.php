<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojistasTable extends Migration
{
    public function up()
    {
        Schema::create('lojistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->decimal('saldo', 10, 2)->default(0);
            $table->enum('tipo_usuario', ['comprador', 'lojista']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lojistas');
    }
}