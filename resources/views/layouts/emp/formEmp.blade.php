@csrf
<h4 style="text-align: right;margin-bottom: 15px;"><b>المعلومات الشخصية :</b></h4>
<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->
<div class="row col-12" style="float: right;">
<div class="col-sm-6 nopadding" style="float: right;" >
<label for="fname" style="float: right;"><strong dir="rtl">الاسم</strong></label>
<input type="text" value="{{ $info->fname }}" name="fname" class="form-control" style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6 nopadding">
<label for="lname" style="float: right;"><strong>الكنية</strong></label>
<input type="text" value="{{ old('lname')??  $info->lname }}" name="lname" class="form-control"  style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6">
<label for="status" style="float: right;"><strong>اسم الاب</strong></label>
<input type="text" value="{{ old('fatherName') ??  $info->fatherName  }}" name="fatherName" class="form-control"  style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-6">
<label for="motherName" style="float: right;"><strong>اسم الام</strong></label>
<input type="text" value="{{ old('motherName') ?? $info->motherName }}" name="motherName" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6" style="float: right;">
<label for="birthDate" style="float: right;"><strong>تاريخ الميلاد</strong></label>
<input type="date" value="{{  $info->birthDate  }}" name="birthDate" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6" style="float: right;">
<label for="birthPlace"style="float: right;"><strong>مكان الولادة</strong></label>
<input type="text" value="{{  $info->birthPlace  }}" name="birthPlace" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="nationalNb" style="padding-top: 10px;float: right;"><strong>الرقم الوطني</strong></label>
<input type="text" value="{{  $info->nationalNb  }}" name="nationalNb" class="form-control" style="background-color:#e6e6e6" >
</div>
{{-- <div class="col-sm-6">
<label for="address" style="float: right;"><strong>العنوان</strong></label>
<input type="text" value="{{  $info->address  }}" name="address" class="form-control" style="background-color:#e6e6e6" >
</div> --}}
<div class="col-sm-6">
<label for="email" style="padding-top: 10px;float: right;"><strong>ايميل</strong></label>
<input type="email" value="{{  $info->email  }}" name="email" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="mobile" style="padding-top: 10px;float: right;"><strong>موبايل</strong></label>
<input type="text" value="{{  $info->mobile  }}" name="mobile" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="childNb" style="padding-top: 10px;float: right;"><strong>عدد الاولاد</strong></label>
<input type="number" value="{{  $info->childNb  }}" name="childNb" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="isMarid" style="padding-top: 10px;float: right;"><strong>الحالة الاجتماعية</strong></label>
<!-- <input type="text" value="{{  $info->isMarid  }}" name="isMarid" class="form-control" style="background-color:#e6e6e6" > -->
<select class="form-control" id="isMarid" name="isMarid" style="background-color:#e6e6e6" >
<option disabled>اختر </option>
  
    <option {{ $info->isMarid=='أعزب' ? 'selected':''}} value="أعزب">أعزب</option>
    <option  {{ $info->isMarid=='متزوج' ? 'selected':''}} value="متزوج">متزوج</option>
 
  </select>
</div>
<div class="col-sm-6" >
<label for="sex" style="padding-top: 10px;float: right;"><strong>الجنس</strong></label>
<select class="form-control" id="sex" name="sex" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option {{ $info->sex=='ذكر' ? 'selected':''}} value="ذكر">ذكر</option>
    <option  {{ $info->sex=='انثى' ? 'selected':''}} value="انثى">انثى</option>
 
  </select>
</div>
<div class="col-sm-6">
<label for="mitlary" style="padding-top: 10px;float: right;"><strong> الخدمة العسكرية</strong></label>
<!-- <input type="text" value="{{  $info->mitlary  }}" name="mitlary" class="form-control" style="background-color:#e6e6e6" > -->
<select class="form-control" id="mitlary" name="mitlary" style="background-color:#e6e6e6" >
<option disabled>اختر </option>
  	<option {{ $info->mitlary=='لا يوجد' ? 'selected':''}} value="لا يوجد">لا يوجد</option>
    <option {{ $info->mitlary=='مؤدي' ? 'selected':''}} value="مؤدي">مؤدي</option>
    <option  {{ $info->mitlary=='معفى' ? 'selected':''}} value="معفى">معفى </option>
	<option  {{ $info->mitlary=='بدل' ? 'selected':''}} value="بدل">بدل </option>
	<option  {{ $info->mitlary=='وحيد' ? 'selected':''}} value="وحيد">وحيد</option>
 
  </select>
</div>
<div class="col-sm-6">
<label for="posDate" style="padding-top: 10px;float: right;"><strong> تاريخ التعيين</strong></label>
<input type="date" value="{{  $info->posDate  }}" name="posDate" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
  <label for="posPlace" style="padding-top: 10px;float: right;"><strong> العنوان الحالي</strong></label>
  <input type="text" value="{{  $info->address  }}" name="address" class="form-control" style="background-color:#e6e6e6" >
  </div>

<div class="col-sm-6">
<label for="posStatus" style="padding-top: 10px;float: right;"><strong>العلاقة الوظيفية</strong></label>
<!-- <input type="text" value="{{  $info->posStatus  }}" name="posStatus" class="form-control" style="background-color:#e6e6e6" > -->
<select class="form-control" id="posStatus" name="posStatus" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option {{ $info->posStatus=='دائم' ? 'selected':''}} value="دائم">دائم</option>
    <option  {{ $info->posStatus=='مؤقت' ? 'selected':''}} value="مؤقت">مؤقت</option>
 
  </select>
</div>


  <div class="col-sm-6">
    <label for="posPlace" style="padding-top: 10px;float: right;"><strong>صك اشغال مركز العمل </strong></label>
<!--     <input type="text" value="{{  $info->doc  }}" name="doc" class="form-control" style="background-color:#e6e6e6" > -->
  <select class="form-control" id="doc" name="doc" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
  	<option {{ $info->doc=='لا يوجد' ? 'selected':''}} value="لا يوجد ">لا يوجد </option>
    <option {{ $info->doc=='قرار ' ? 'selected':''}} value="قرار ">قرار </option>
    <option  {{ $info->doc=='مرسوم' ? 'selected':''}} value="مرسوم">مرسوم</option>
 
  </select>
    </div>
    <div class="col-sm-6">
      <label for="posPlace" style="padding-top: 10px;float: right;"><strong>الجهة الفرعية</strong></label>
      {{-- <input type="text" value="{{  $info->posPlace2  }}" name="posPlace2" class="form-control" style="background-color:#e6e6e6" > --}}
    	<input type="text" value="{{  $pranches2  }}" name="posPlace2" class="form-control" style="background-color:#e6e6e6" >
      {{-- <select class="form-control" id="posPlace2" name="posPlace2" style="background-color:#e6e6e6" readonly>
        @if($pranches)->isEmpty())
        <option  {{ $info->posPlace2 ===  $pranches2  ? 'selected':''}} value='{{ $pranches2 }}'> {{ $pranches2 }}  </option>
        @endif
        @if($pranches)->!isEmpty())
        @foreach ($pranches as $item)
        
          <option  {{ $info->posPlace2 ===  $item->name  ? 'selected':''}} value='{{ $item->name }}'> {{ $item->name }}  </option>
       
        @endforeach
        @endif --}}
      </select>
      </div>
    
    <div class="col-sm-6">
      <label for="posPlace" style="padding-top: 10px;float: right;"><strong>رقم الصك </strong></label>
      <input type="text" value="{{  $info->docNb  }}" name="docNb" class="form-control" style="background-color:#e6e6e6" >
      </div><div class="col-sm-6">
        <label for="posPlace" style="padding-top: 10px;float: right;"><strong> تاريخ الصك</strong></label>
        <input type="date" value="{{  $info->docDate  }}" name="docDate" class="form-control" style="background-color:#e6e6e6" >
        </div>

<div class="col-sm-12">
<label for="posName" style="padding-top: 10px;float: right;"><strong>المسمى الوظيفي</strong></label>
<input type="text" value="{{  $info->posName  }}" name="posName" class="form-control" style="background-color:#e6e6e6" >
</div>

<div class="col-sm-6">
<label for="info_apply" style="padding-top: 10px;float: right;"><strong>عامل بموجب</strong></label>
<select name="info_apply" class="form-control" style="background-color:#e6e6e6" >
      <!--<option value="" disabled selected>-- اختر --</option>-->
	  <option {{ $info->info_apply=='بلا' ? 'selected':''}} value="بلا">بلا</option>
      <option {{ $info->info_apply=='مكلف' ? 'selected':''}} value="مكلف">مكلف</option>
      <option {{ $info->info_apply=='عهدة' ? 'selected':''}} value="عهدة">عهدة</option>
      <option {{ $info->info_apply=='اسناد' ? 'selected':''}} value="اسناد">اسناد</option>
      <option {{ $info->info_apply=='تكليف داخلي' ? 'selected':''}} value="تكليف داخلي">تكليف داخلي</option>
</select>
</div> 
 
<div class="col-sm-6">
<label for="info_own" style="padding-top: 10px;float: right;"><strong>الوضع الوظيفي</strong></label>
<select name="info_own" class="form-control" style="background-color:#e6e6e6" >
      <option {{ $info->info_own=='ملاك' ? 'selected':''}} value="ملاك">ملاك</option>
      <option {{ $info->info_own=='مندب' ? 'selected':''}} value="مندب">مندب</option>
      <option {{ $info->info_own=='ندب خارجي' ? 'selected':''}} value="ندب خارجي">ندب خارجي</option>
      <option {{ $info->info_own=='عقد 3 أشهر' ? 'selected':''}} value="عقد 3 أشهر">عقد 3 أشهر</option>
      <option {{ $info->info_own=='عقد سنوي' ? 'selected':''}} value="عقد سنوي">عقد سنوي</option>
      <option {{ $info->info_own=='تحديد مكان عمل' ? 'selected':''}} value="تحديد مكان عمل">تحديد مكان عمل</option>
      <option {{ $info->info_own=='فرز' ? 'selected':''}} value="فرز">فرز</option>
</select>
</div>

<div class="col-sm-6">
<label for="lang1" style="padding-top: 10px;float: right;"><strong>اللغة انكليزية</strong></label>
<!-- <input type="text" value="{{  $info->lang1  }}" name="lang1" class="form-control" style="background-color:#e6e6e6" > -->
<select name="lang1" class="form-control" style="background-color:#e6e6e6" >
      <option {{ $info->lang1=='نعم' ? 'selected':''}} value="نعم">نعم</option>
	  <option {{ $info->lang1=='لا' ? 'selected':''}} value="لا">لا</option>
</select>
</div>
<div class="col-sm-6">
  <label for="lang1" style="padding-top: 10px;float: right;"><strong>درجة الاتقان</strong></label>
<!--   <input type="text" value="{{  $info->levelLang1  }}" name="levelLang1" class="form-control" style="background-color:#e6e6e6" > -->
<select name="levelLang1" class="form-control" style="background-color:#e6e6e6" >
      <option {{ $info->levelLang1=='جيد' ? 'selected':''}} value="جيد">جيد</option>
	  <option {{ $info->levelLang1=='متوسط' ? 'selected':''}} value="متوسط">متوسط</option>
	 <option {{ $info->levelLang1=='ممتاز' ? 'selected':''}} value="ممتاز">ممتاز</option>
</select>
  </div>
<div class="col-sm-6">
<label for="lang2" style="padding-top: 10px;float: right;"><strong>2اللغة</strong></label>
<input type="text" value="{{  $info-> lang2 }}" name="lang2" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
  <label for="lang1" style="padding-top: 10px;float: right;"><strong>درجة الاتقان</strong></label>
<!--   <input type="text" value="{{  $info->levelLang2  }}" name="levelLang2" class="form-control" style="background-color:#e6e6e6" > -->
<select name="levelLang2" class="form-control" style="background-color:#e6e6e6" >
      <option {{ $info->levelLang2=='لا يوجد' ? 'selected':''}} value="لا يوجد">لا يوجد</option>
	  <option {{ $info->levelLang2=='جيد' ? 'selected':''}} value="جيد">جيد</option>
	  <option {{ $info->levelLang2=='متوسط' ? 'selected':''}} value="متوسط">متوسط</option>
	 <option {{ $info->levelLang2=='ممتاز' ? 'selected':''}} value="ممتاز">ممتاز</option>
</select>
  </div>
<div class="col-sm-6">
<label for="degree" style="padding-top: 10px;float: right;"><strong>الفئة</strong></label>
<!-- <input type="number" value="{{  $info->degree  }}" name="degree" class="form-control"  style="background-color:#e6e6e6" required> -->
<select name="degree" class="form-control" style="background-color:#e6e6e6" >
      <option {{ $info->degree=='1' ? 'selected':''}} value="1">1</option>
	  <option {{ $info->degree=='2' ? 'selected':''}} value="2">2</option>
	 <option {{ $info->degree=='3' ? 'selected':''}} value="3">3</option>
	<option {{ $info->degree=='4' ? 'selected':''}} value="4">4</option>
	<option {{ $info->degree=='5' ? 'selected':''}} value="5">5</option>
</select>
</div>
<div class="col-sm-6">
  <label for="childNb" style="padding-top: 10px;float: right;"><strong>عدد سنين الخدمة</strong></label>
  <input type="number" value="{{  $info->serviceYearNb  }}" name="serviceYearNb" class="form-control" style="background-color:#e6e6e6" >
  </div>
<div class="col-sm-12 mb-3">
<label for="exPos" style="float: right;padding-top: 10px;"><strong>الاعمال التي مارسها سابقا</strong></label>
<input type="text" value="{{  $info->exPos  }}" name="exPos" class="form-control" style="padding-bottom: 20px;background-color:#e6e6e6">
</div> 
</div>
<div class="flex flex-col justify-around h-full">
  {{-- @livewire('dropdowns'); --}}
  {{-- , ['country'=>$concert->MainName, 'city'=>$concert->name]) --}}
</div>
<div>
  <div style="padding-bottom: 20px"></div>
