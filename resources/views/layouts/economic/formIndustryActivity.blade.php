@csrf
<h4 style="text-align: right;margin-bottom: 15px;"><b>اضافة نشاط صناعي  :</b></h4>
<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->
<div class="row col-12" style="float: right;">
<input type="text" value="{{ session()->get('record') }}" name="recordId" class="form-control" style="background-color:#e6e6e6" hidden>

<div class="col-sm-6 nopadding" style="float: right;" >
<label for="unite" style="float: right;"><strong dir="rtl">الباب</strong></label>
<input type="text" value="{{ $category['unite'] }}" name="unite" class="form-control" style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6 nopadding">
<label for="chapter" style="float: right;"><strong>الفصل</strong></label>
<input type="text" value="{{ old('chapter')??  $category['chapter'] }}" name="chapter" class="form-control"  style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6">
<label for="branch" style="float: right;"><strong>الفرع</strong></label>
<input type="text" value="{{ old('branch') ??  $category['branch']  }}" name="branch" class="form-control"  style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-6" style="float: right;">
    <label for="code" style="float: right;"><strong>رمز النشاط </strong></label>
    <input type="text" value="{{  $category['code']  }}" name="code" class="form-control" style="background-color:#e6e6e6" >
    </div>

<div class="col-sm-6" style="float: right;">
<label for="type" style="float: right;"><strong>بيان النشاط </strong></label>
<input type="text" value="{{  $category['type']  }}" name="type" class="form-control" style="background-color:#e6e6e6" >
</div>


<div class="col-sm-6" >
<label for="kind" style="padding-top: 10px;float: right;"><strong>نوع النشاط </strong></label>
<select class="form-control" id="kind" name="kind" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option  value="صناعي">صناعي</option>
    <option   value="حرفي">حرفي</option>
 
  </select>
</div><div class="col-sm-6" >
    <label for="status" style="padding-top: 10px;float: right;"><strong>حالة النشاط </strong></label>
    <select class="form-control" id="status" name="status" style="background-color:#e6e6e6" >
        <option disabled>اختر </option>
       
        <option  value="عامل">عامل</option>
        <option   value="متوقف">متوقف</option>
        <option  value="متوقف جزئي">متوقف جزئي</option>
     
      </select>
    </div>
  <div  class="col-sm-6"  ><br></div>
