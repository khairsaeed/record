
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>عذرا!</strong> يوجد خطأ في بيانات الادخال<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@csrf
<h4 style="text-align: right;margin-bottom: 15px;"><b>معلومات السجل :</b></h4>
<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->

<div class="row col-12" style="float: right;">



{{-- <div class="col-sm-6 nopadding" style="float: right;" >
<label for="name" style="float: right;"><strong dir="rtl">الاسم</strong></label>
<input type="text" value="{{ $record->name }}" name="name" class="form-control" style="background-color:#e6e6e6" required>
</div> --}}

<div class="col-sm-6">
<label for="record_nb" style="float: right;"><strong>رقم السجل الصناعي</strong></label>
<input type="text" value="{{ old('record_nb') ??  $record->record_nb  }}" name="record_nb" class="form-control"  style="background-color:#e6e6e6" required>
</div>


<div class="col-sm-6" style="float: right;">
<label for="record_date"style="float: right;"><strong>تاريخ السجل الصناعي</strong></label>
<input type="date" value="{{  $record->record_date  }}" name="record_date" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="industry_kind" style="padding-top: 10px;float: right;"><strong>نوع الصناعة</strong></label>
<input type="text" value="{{  $record->industry_kind  }}" name="industry_kind" class="form-control" style="background-color:#e6e6e6" >
</div>
{{-- <div class="col-sm-6">
<label for="address" style="float: right;"><strong>العنوان</strong></label>
<input type="text" value="{{  $record->address  }}" name="address" class="form-control" style="background-color:#e6e6e6" >
</div> --}}



<div class="col-sm-6" >
<label for="type" style="padding-top: 10px;float: right;"><strong>القطاع</strong></label>
<select class="form-control" id="type" name="type" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option {{ $record->type=='كيميائي' ? 'selected':''}} value="كيميائي">كيميائي</option>
    <option  {{ $record->type=='هندسي' ? 'selected':''}} value="هندسي">هندسي</option>
    <option  {{ $record->type=='غذائي' ? 'selected':''}} value="غذائي">غذائي</option>
    <option  {{ $record->type=='نسيجي' ? 'selected':''}} value="نسيجي">نسيجي</option>
 
  </select>
</div>
<div class="col-sm-6" >
    <label for="shift_count" style="padding-top: 10px;float: right;"><strong>عدد الورديات</strong></label>
    <select class="form-control" id="shift_count" name="shift_count" style="background-color:#e6e6e6" >
        <option disabled>اختر </option>
      
        <option {{ $record->shift_count=='1' ? 'selected':''}} value="1">1</option>
        <option  {{ $record->shift_count=='2' ? 'selected':''}} value="2">2</option>
        <option  {{ $record->shift_count=='3' ? 'selected':''}} value="3">3</option>
       
      
      </select>
    </div>
    <div class="col-sm-6" >
        <label for="law" style="padding-top: 10px;float: right;"><strong>  قوانين ومراسيم الترخيص</strong></label>
        <select class="form-control" id="law" name="law" style="background-color:#e6e6e6" >
            <option disabled>اختر </option>
          
            <option {{ $record->law=='قانون 10' ? 'selected':''}} value="قانون 10">قانون 10</option>
            <option  {{ $record->law=='مرسوم 8' ? 'selected':''}} value="مرسوم 8">مرسوم 8</option>
            <option  {{ $record->law=='قانون 21' ? 'selected':''}} value="قانون 21">قانون 21</option>
            <option  {{ $record->law=='مرسوم 47' ? 'selected':''}} value="مرسوم 47">مرسوم 47</option>
           
          </select>
        </div>
        <div class="col-sm-6" >
            <label for="factory_status" style="padding-top: 10px;float: right;"><strong> حالة المنشأة</strong></label>
            <select class="form-control" id="factory_status" name="factory_status" style="background-color:#e6e6e6" >
                <option disabled>اختر </option>
              
                <option {{ $record->factory_status=='عاملة' ? 'selected':''}} value="عاملة">عاملة</option>
                <option  {{ $record->factory_status=='متوقفة' ? 'selected':''}} value="متوقفة">متوقفة</option>
                <option  {{ $record->factory_status=='عاملة بشكل جزئي' ? 'selected':''}} value="عاملة بشكل جزئي">عاملة بشكل جزئي</option>
               
              
              </select>
            </div>
            <div class="col-sm-6 nopadding">
             
              <label for="code_work" style="padding-top: 10px;float: right;"><strong>نوع النشاط </strong></label>
            
              {{-- <input type="text" value="{{ old('code_work')??  $record->code_work }}" name="code_work" class="form-control"  style="background-color:#e6e6e6" required> --}}
              <select class="form-control" id="code_work" name="code_work" style="background-color:#e6e6e6" >
                <option disabled>اختر </option>
              
                <option  {{ $record->code_work=='صناعي' ? 'selected':''}} value="صناعي">صناعي</option>
                <option  {{ $record->code_work=='حرفي' ? 'selected':''}} value="حرفي">حرفي</option>
               
              
              </select> 
            </div>



  <div  class="col-sm-6"  ><br></div>
