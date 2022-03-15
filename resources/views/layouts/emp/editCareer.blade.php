
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-3" >
    <h3>تعديل بند المسار الوظيفي</h3>
</div>
<form action="/career/{{ $info->id }}/update/{{ $career->id }}" method="post" dir="rtl">
@method('PATCH')
@csrf
@include('layouts.emp.formCareer')
     
<div class="row col-sm-12 mt-3" >
    <button class="btn btn-success" type="submit">حفظ التعديلات</button>
</div>
</form>
@endsection