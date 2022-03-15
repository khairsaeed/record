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


<div class="col-sm-6" style="float: right;">
<label for="birthPlace"style="float: right;"><strong>الخانة</strong></label>
<input type="text" value="{{  $info->khana  }}" name="khana" class="form-control" style="background-color:#e6e6e6" >
</div>
<div class="col-sm-6">
<label for="nationalNb" style="padding-top: 10px;float: right;"><strong>الرقم الوطني</strong></label>
<input type="text" value="{{  $info->nationalNb  }}" name="nationalNb" class="form-control" style="background-color:#e6e6e6" >
</div>
{{-- <div class="col-sm-6">
<label for="address" style="float: right;"><strong>العنوان</strong></label>
<input type="text" value="{{  $info->address  }}" name="address" class="form-control" style="background-color:#e6e6e6" >
</div> --}}



<div class="col-sm-6" >
<label for="sex" style="padding-top: 10px;float: right;"><strong>الجنس</strong></label>
<select class="form-control" id="sex" name="sex" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option {{ $info->sex=='ذكر' ? 'selected':''}} value="ذكر">ذكر</option>
    <option  {{ $info->sex=='انثى' ? 'selected':''}} value="انثى">انثى</option>
 
  </select>
</div>

  <div  class="col-sm-6"  ><br></div>
