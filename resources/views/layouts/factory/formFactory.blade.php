@csrf

<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->
<div class="row col-12" style="float: right;">
<div class="col-sm-3 " style="float: right;padding-top: 5px;" >
<label for="nb" style="float: right;"><strong dir="rtl">رقم المنشأة (رقم/محافظة)</strong></label>
<input type="text" value="{{$factory->nb }}" name="nb" class="form-control" style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-6 nopadding">
<label for="name" style="float: right;padding-top: 5px;"><strong>اسم المنشأة (كما هو وارد في السجل التجاري أو عقد الشركة)</strong></label>
<input type="text" value="{{ old('name')?? $factory->name }}" name="name" class="form-control"  style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-3">
    <label for="governorate" style="float: right;padding-top: 5px;"><strong>المحافظة </strong></label>
      <select class="form-control" id="governorate" name="governorate" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
      
        <option  {{$factory->governorate=='ريف دمشق'  ? 'selected':''}} value="ريف دمشق">ريف دمشق </option>
        <option  {{$factory->governorate=='دمشق' ? 'selected':''}} value="دمشق">دمشق </option>
        <option  {{$factory->governorate=='اللاذقية' ? 'selected':''}} value="اللاذقية">اللاذقية </option>
        <option  {{$factory->governorate=='حمص' ? 'selected':''}} value="حمص">حمص </option>
        <option  {{$factory->governorate=='حماه' ? 'selected':''}} value="حماه">حماه </option>
        <option  {{$factory->governorate=='طرطوس' ? 'selected':''}} value="طرطوس">طرطوس </option>
        <option  {{$factory->governorate=='السويداء' ? 'selected':''}} value="السويداء">السويداء </option>
        <option  {{$factory->governorate=='درعا' ? 'selected':''}} value="درعا">درعا </option>
        <option  {{$factory->governorate=='القنيطرة' ? 'selected':''}} value="القنيطرة">القنيطرة </option>
        <option  {{$factory->governorate=='الرقة' ? 'selected':''}} value="الرقة">الرقة </option>
        <option  {{$factory->governorate=='دير الزور' ? 'selected':''}} value="دير الزور">دير الزور </option>
        <option  {{$factory->governorate=='الحسكة' ? 'selected':''}} value="الحسكة">الحسكة </option>
        <option  {{$factory->governorate=='إدلب' ? 'selected':''}} value="إدلب">إدلب </option>
        <option  {{$factory->governorate=='حلب' ? 'selected':''}} value="حلب">حلب </option>
        <option  {{$factory->governorate=='المدينة الصناعية دير الزور' ? 'selected':''}} value="المدينة الصناعية دير الزور">المدينة الصناعية دير الزور </option>
        <option  {{$factory->governorate=='المدينة الصناعية حسيا' ? 'selected':''}} value="المدينة الصناعية حسيا">المدينة الصناعية حسيا </option>
        <option  {{$factory->governorate=='المدينة الصناعية الشيخ نجار' ? 'selected':''}} value="المدينة الصناعية الشيخ نجار">المدينة الصناعية الشيخ نجار</option>
        <option  {{$factory->governorate=='المدينة الصناعية عدرا' ? 'selected':''}} value="المدينة الصناعية عدرا">المدينة الصناعية عدرا</option>
      
      </select>
    </div>

<div class="col-sm-6">
<label for="address" style="float: right;padding-top: 5px;"><strong>العنوان </strong></label>
<input type="text" value="{{ old('address') ?? $factory->address  }}" name="address" class="form-control"  style="background-color:#e6e6e6" >
</div>

<div class="col-sm-3">
<label for="phone" style="float: right;padding-top: 5px;"><strong>هاتف</strong></label>
<input type="text" value="{{ old('phone') ??$factory->phone }}" name="phone" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-3">
    <label for="kayan_kanony" style="float: right;padding-top: 5px;"><strong>الكيان القانوني </strong></label>
      <select class="form-control" id="kayan_kanony" name="kayan_kanony" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
      
        <option  {{$factory->kayan_kanony=='مساهمة مغفلة'  ? 'selected':''}} value="مساهمة مغفلة">مساهمة مغفلة   </option>
        <option  {{$factory->kayan_kanony=='مساهمة مغفلة خاصة' ? 'selected':''}} value="مساهمة مغفلة خاصة">مساهمة مغفلة خاصة </option>
        <option  {{$factory->kayan_kanony=='تضامنية' ? 'selected':''}} value="تضامنية">تضامنية  </option>
        <option  {{$factory->kayan_kanony=='توصية بسيطة' ? 'selected':''}} value="توصية بسيطة">توصية بسيطة  </option>
        <option  {{$factory->kayan_kanony=='محاصة' ? 'selected':''}} value="محاصة">  </option>
        <option  {{$factory->kayan_kanony=='عامة' ? 'selected':''}} value="عامة">عامة  </option>
        <option  {{$factory->kayan_kanony=='فردية' ? 'selected':''}} value="فردية">فردية  </option>
        <option  {{$factory->kayan_kanony=='محدودة المسؤولية' ? 'selected':''}} value="محدودة المسؤولية">محدودة المسؤولية  </option>
        <option  {{$factory->kayan_kanony=='محدودة المسؤولية فردية' ? 'selected':''}} value="محدودة المسؤولية فردية">محدودة المسؤولية فردية </option>
        
      </select>
    </div>

<div class="col-sm-3" style="float: right;padding-top: 5px;">
<label for="machine_value"style="float: right;"><strong>قيمة الآلات</strong></label>
<input type="number"  step='0.001' value="{{ $factory->machine_value  }}" name="machine_value" class="form-control" style="background-color:#e6e6e6" >
</div>

<div class="col-sm-3">
<label for="mony" style="padding-top: 5px;float: right;"><strong>رأس المال</strong></label>
<input type="number" step='0.001'  value="{{ $factory->mony  }}" name="mony" class="form-control" style="background-color:#e6e6e6" >
</div>

<div class="col-sm-3">
<label for="mail_count_edary" style="padding-top: 5px;float: right;"><strong>عدد العمال الإداريين ذكور</strong></label>
<input type="number" step='0.001'  value="{{ $factory->mail_count_edary  }}" name="mail_count_edary" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-3">
<label for="fmail_count_edary" style="padding-top: 5px;float: right;"><strong>عدد العمال الإداريين إناث</strong></label>
<input type="number" step='0.001'  value="{{ $factory->fmail_count_edary  }}" name="fmail_count_edary" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-3">
<label for="mail_count_entage" style="padding-top: 5px;float: right;"><strong>عدد عمال الإنتاج ذكور</strong></label>
<input type="number" step='0.001'  value="{{ $factory->mail_count_entage  }}" name="mail_count_entage" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-3">
    <label for="fmail_count_entage" style="padding-top: 5px;float: right;"><strong>عدد عمال الإنتاج إناث</strong></label>
    <input type="number" step='0.001'  value="{{ $factory->fmail_count_entage  }}" name="fmail_count_entage" class="form-control" style="background-color:#e6e6e6" >
</div>
    <div class="col-sm-3">
        <label for="water_consume" style="padding-top: 5px;float: right;"><strong>كمية المياه المستهلكة شهرياً</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->water_consume  }}" name="water_consume" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="electric_consume" style="padding-top: 5px;float: right;"><strong>كمية الطاقة الكهربائية المستهلكة شهرياً</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->electric_consume  }}" name="electric_consume" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="elec_unit" style="float: right;"><strong>الواحدة </strong></label>
        <input type="text" value="{{ old('elec_unit') ?? $factory->elec_unit  }}" name="elec_unit" class="form-control"  style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="fuel_consume" style="padding-top: 5px;float: right;"><strong>كمية الفيول الأويل المستهلك شهرياً</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->fuel_consume  }}" name="fuel_consume" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="fuel_unit" style="float: right;"><strong>الواحدة </strong></label>
        <input type="text" value="{{ old('fuel_unit') ?? $factory->fuel_unit  }}" name="fuel_unit" class="form-control"  style="background-color:#e6e6e6" >
        </div>
    <div class="col-sm-3">
        <label for="diesel" style="padding-top: 5px;float: right;"><strong>كمية المازوت</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->diesel  }}" name="diesel" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="diesel_unit" style="float: right;"><strong>الواحدة </strong></label>
        <input type="text" value="{{ old('diesel_unit') ?? $factory->diesel_unit  }}" name="diesel_unit" class="form-control"  style="background-color:#e6e6e6" >
    </div>
    
    <div class="col-sm-3">
        <label for="gaze" style="padding-top: 5px;float: right;"><strong>كمية الغاز</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->gaze  }}" name="gaze" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="gaze_unit" style="float: right;"><strong>الواحدة </strong></label>
        <input type="text" value="{{ old('gaze_unit') ?? $factory->gaze_unit  }}" name="gaze_unit" class="form-control"  style="background-color:#e6e6e6" >
    </div>
    
    <div class="col-sm-3">
        <label for="oil_grease_consume" style="padding-top: 5px;float: right;"><strong>كمية الزيت والشحم المعدني</strong></label>
        <input type="number" step='0.001'  value="{{ $factory->oil_grease_consume  }}" name="oil_grease_consume" class="form-control" style="background-color:#e6e6e6" >
    </div>
    <div class="col-sm-3">
        <label for="oil_grease_unit" style="float: right;"><strong>الواحدة </strong></label>
        <input type="text" value="{{ old('oil_grease_unit') ?? $factory->oil_grease_unit  }}" name="oil_grease_unit" class="form-control"  style="background-color:#e6e6e6" >
    </div>
    
   
<div class="col-sm-3">
<label for="factory_status" style="padding-top: 5px;float: right;"><strong>حالة المنشأة </strong></label>
<select class="form-control" id="factory_status" name="factory_status" style="background-color:#e6e6e6" >
<option disabled>اختر </option>
    <option {{$factory->factory_status=='عاملة' ? 'selected':''}} value="عاملة">عاملة </option>
    <option {{$factory->factory_status=='متوقفة' ? 'selected':''}} value="متوقفة">متوقفة</option>
    <option {{$factory->factory_status=='عاملة بشكل جزئي' ? 'selected':''}} value="عاملة بشكل جزئي">عاملة بشكل جزئي</option>
   </select>
</div>

<div class="col-sm-3" >
<label for="factory_mode" style="padding-top: 5px;float: right;"><strong>وضع المنشأة</strong></label>
<select class="form-control" id="factory_mode" name="factory_mode" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
    <option {{$factory->factory_mode=='قائمة' ? 'selected':''}} value="قائمة">قائمة</option>
    <option {{$factory->factory_mode=='خارج الخدمة' ? 'selected':''}} value="خارج الخدمة">خارج الخدمة</option>
   
  </select>
</div>


</div>
<div class="flex flex-col justify-around h-full">
  {{-- @livewire('dropdowns'); --}}
  {{-- , ['country'=>$concert->MainName, 'city'=>$concert->name]) --}}
</div>

  <div style="padding-bottom: 20px"></div>
