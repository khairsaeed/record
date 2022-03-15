<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_activities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('record_id')->unsigned()->index();
            $table->string('unite')->nullable();//الباب    
            $table->string('chapter')->nullable();//والفصل    
            $table->string('branch')->nullable();//والفرع    
            $table->string('code')->nullable();//رمز النشاط    
            $table->string('type')->nullable();//بيان النشاط   
            $table->string('kind')->nullable();//نوع النشاط  قائمة منسدلة (صناعي او حرفي)
            $table->string('status')->nullable();//حالة  النشاط     (عامل – متوقف – متوقف جزئي)
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
        Schema::dropIfExists('industry_activities');
    }
}
