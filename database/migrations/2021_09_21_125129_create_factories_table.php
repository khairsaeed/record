<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *       جدول المنشات
     * @return void
     */
    public function up()
    {
        Schema::create('factories', function (Blueprint $table) {
            $table->id();
         
            $table->string('nb');//رقم المنشأة   
            $table->string('name');//اسم   
            $table->string('governorate');//محافظة   
            $table->string('address')->nullable();//العنوان   
            $table->string('phone')->nullable();//هاتف   
            $table->string('kayan_kanony')->nullable();//كيان القانوني   
            $table->double('machine_value')->nullable();//قيمة الالات   
            $table->double('mony')->nullable();//راس المال   
            $table->integer('mail_count_edary')->nullable();//عدد العمال الذكورا  الاداريين   
            $table->integer('fmail_count_edary')->nullable();//عدد العمال الاناث الاداريين   
            $table->integer('mail_count_entage')->nullable();//عدد العمال الذكور الانتاجيين   
            $table->integer('fmail_count_entage')->nullable();//عدد العمال الاناث الانتاجيين   
            $table->double('water_consume')->nullable();//كمية المياه المستهلكة شهريا   
            $table->double('electric_consume')->nullable();//كمية الطاقة الكهربائية المستهلكة شهرياً   
            $table->string('elec_unit')->nullable();//واحدة الكهرباء   
            $table->double('fuel_consume')->nullable();//كمية الفيول الأويل المستهلك شهرياً   
            $table->string('fuel_unit')->nullable();//الواحدة   
            $table->double('diesel')->nullable();//كمية المازوت    
            $table->string('diesel_unit')->nullable();//الواحدة   
            $table->double('gaze')->nullable();//كمية الغاز   
            $table->string('gaze_unit')->nullable();//الواحدة   
            $table->double('oil_grease_consume')->nullable();//كمية الزيت والشحم المعدني   
            $table->string('oil_grease_unit')->nullable();//الواحدة   
            $table->integer('groupId');
          

            $table->string('factory_status')->nullable();//حالة المنشأة   
            $table->string('factory_mode')->nullable();//وضع المنشأة   
          
         
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
        Schema::dropIfExists('factories');
    }
}
