<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('fname');//اسم   
            $table->string('lname');//اسم   الكنية
            $table->string('fatherName')->nullable();//اسم   الاب
            $table->string('sex')->nullable();// الجنس  
            $table->string('khana')->nullable();//الخانة   
            $table->string('nationalNb')->nullable();//الرقم الوطني   
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
        Schema::dropIfExists('owners');
    }
}
