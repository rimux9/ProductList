<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePabandymuiTbl extends Migration
{
    public function up()
    {
        Schema::create('pabandymui', function (Blueprint $table) {


            $table->integer('id');
            $table->string('name');
            $table->string('category');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pabandymui');
    }
}
