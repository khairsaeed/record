<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *هذا الجدول يحوي المواد الاولية
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('activity_product_id')->unsigned()->index();
            $table->string('name')->nullable();//اسم المادة الاولية
            $table->text('describe')->nullable();//الوصف
            $table->string('trading_flag')->nullable();         //العلامة التجارية
            $table->string('code')->nullable();//ترميز المادة الاولية
            $table->string('public_name')->nullable(); //اسم المادة الأولية السلعي
            $table->float('ammount')->nullable();//كمية المادة الأولية سنوياً
            $table->string('unit')->nullable(); //الواحدة
            $table->text('note')->nullable();//ملاحظات
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
        Schema::dropIfExists('materials');
    }
}
