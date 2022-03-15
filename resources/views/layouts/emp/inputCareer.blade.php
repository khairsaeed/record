@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-3" >
    <h3>المسار الوظيفي</h3> 
</div>
<div class="row col-sm-12 " >
<form action="/career/store/{{ $info->id }}" method="post" dir="rtl">
@csrf
@include('layouts.emp.formCareer')

<div class="row col-sm-12 " >
    <button class="btn btn-success" type="submit">حفظ التعديلات</button>
</div>
</form>
</div>
@endsection