<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomicCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_categories', function (Blueprint $table) {
            $table->id();
            
            $table->string('unite')->nullable();//الباب القسم   
            $table->string('groups')->nullable();//المجموعة    
            $table->string('chapter')->nullable();//والفصل الفئة   
            $table->string('branch')->nullable();//والفرع    
            $table->string('code')->nullable();//رمز النشاط    
            $table->string('type')->nullable();//بيان النشاط    
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
        Schema::dropIfExists('economic_categories');
    }
}
