<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('industry_activity_id')->unsigned()->index();
            $table->string('hs_name')->nullable();//اسم   المنتج
            $table->text('describe')->nullable();//الوصف
            $table->string('code')->nullable();//ترميز المنتج
            $table->string('public_name')->nullable(); //الاسم السلعي
            $table->float('ammount')->nullable();//الطاقة الإنتاجية سنوياً
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
        Schema::dropIfExists('products');
    }
}
