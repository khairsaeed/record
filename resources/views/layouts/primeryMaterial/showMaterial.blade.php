@extends('layouts.app')

@section('content')
    
{{session(['industry_activity' => $industry_activity])}}
@csrf
<h4 style="text-align: right;margin-bottom: 15px;"><b>اضافة نشاط صناعي  :</b></h4>
<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->
<div class="row col-12" style="float: right;">
<input type="text" value="{{ session()->get('industry_activity') }}" name="recordId" class="form-control" style="background-color:#e6e6e6" hidden>

<div class="col-sm-6 nopadding" style="float: right;" >
<label for="unite" style="float: right;"><strong dir="rtl">الباب</strong></label>
<input type="text" value="{{ $industry_activity->unite }}" name="unite" class="form-control" style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6 nopadding">
<label for="chapter" style="float: right;"><strong>الفصل</strong></label>
<input type="text" value="{{ old('chapter')??  $industry_activity->chapter }}" name="chapter" class="form-control"  style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6">
<label for="branch" style="float: right;"><strong>الفرع</strong></label>
<input type="text" value="{{ old('branch') ??  $industry_activity->branch  }}" name="branch" class="form-control"  style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-6" style="float: right;">
    <label for="code" style="float: right;"><strong>رمز النشاط </strong></label>
    <input type="text" value="{{  $industry_activity->code  }}" name="code" class="form-control" style="background-color:#e6e6e6" >
    </div>

<div class="col-sm-6" style="float: right;">
<label for="type" style="float: right;"><strong>بيان النشاط </strong></label>
<input type="text" value="{{  $industry_activity->type  }}" name="type" class="form-control" style="background-color:#e6e6e6" >
</div>


<div class="col-sm-6" >
<label for="kind" style="padding-top: 10px;float: right;"><strong>نوع النشاط </strong></label>
<select class="form-control" id="kind" name="kind" style="background-color:#e6e6e6" >
    <option disabled>اختر </option>
  
    <option  {{$industry_activity->kind=='صناعي' ? 'selected':''}} value="صناعي">صناعي</option>
    <option   {{$industry_activity->kind=='حرفي' ? 'selected':''}} value="حرفي">حرفي</option>
 
  </select>
</div><div class="col-sm-6" >
    <label for="status" style="padding-top: 10px;float: right;"><strong>حالة النشاط </strong></label>
    <select class="form-control" id="status" name="status" style="background-color:#e6e6e6" >
        <option disabled>اختر </option>
       
        <option   {{$industry_activity->status=='عامل' ? 'selected':''}} value="عامل">عامل</option>
        <option   {{$industry_activity->status=='متوقف' ? 'selected':''}} value="متوقف">متوقف</option>
        <option  {{$industry_activity->status=='متوقف جزئي' ? 'selected':''}} value="متوقف جزئي">متوقف جزئي</option>
     
      </select>
    </div>
  <div  class="col-sm-6"  ><br></div>


  
        <div><h3>     المواد الاولية لهذا المنتج  <a  class="btn btn-success "  href="# "> اضافة  مادة اولية </a></h1></div>
          <table class="table table-bordered data-table">
          
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>الوصف </th> 
                      <th>الرمز</th>
                    <th>الاسم السلعي </th>
                 
                    <th>العلامة التجارية   </th>
                    <th>الكمية السنوية  </th>
                    
                    <th> الواحدة  </th>
                    <th> ملاحظات  </th>
          
                    
                    <th ></th>
                    <th ></th>
          
                </tr>
          
            </thead>
@foreach ($activityProducts as $row )
                  


<th>{{$row->name}}</th>
<th>{{$row->describe}}</th>
<th>{{$row->code}}</th>
<th>{{$row->public_name}}</th>
<th>{{$row->trading_flag}}</th>
<th>{{$row->ammount}}</th>
<th>{{$row->unit}}</th>
<th>{{$row->note}}</th>

<th >
    <a href="\material\show\{{ $row->id }}" class="btn btn-danger btn-sm"   > عرض</a>
  </th>
<th >
  <a href="\material\delete\{{ $row->id }}" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a>
</th>
</tr>
@endforeach


</tbody>

</table>



</div>

</div>

</body>





@endsection 