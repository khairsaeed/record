<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *   جدول السجلات
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('factory_id')->unsigned()->index();// مفتاح ثانوي للمنشات
           // $table->string('name')->nullable();//اسم   
            $table->string('code_work')->nullable();//نوع النشاط   
            $table->string('record_nb')->nullable();//رقم السجل الصناعي   
            $table->date('record_date')->nullable();//تاريخ السجل الصناعي   
            $table->string('industry_kind')->nullable();//نوع الصناعة   
            $table->string('type')->nullable();//القطاع   
            $table->integer('shift_count')->nullable();//عدد الورديات   
            $table->string('law')->nullable();//قوانين ومراسيم الترخيص   
            $table->string('factory_status')->nullable();//حالة المنشأة   
           
            $table->timestamps();
             $table->foreign('factory_id')->references('id')->on('factories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
