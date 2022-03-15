<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_factories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('factory_id')->unsigned();// مفتاح ثانوي للمنشات
            $table->bigInteger('owner_id')->unsigned();// مفتاح ثانوي للمنشات

            
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
        Schema::dropIfExists('owner_factories');
    }
}
