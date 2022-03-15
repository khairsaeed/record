<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_standards', function (Blueprint $table) {
            $table->id();
            $table->string('name');//اسم   المادة الاولية
            $table->text('describe')->nullable();//الوصف
            $table->string('code')->nullable();//ترميز المادة
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
        Schema::dropIfExists('material_standards');
    }
}
