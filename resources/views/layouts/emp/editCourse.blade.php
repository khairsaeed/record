
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-3" >
    <h3>تعديل دورة</h3>
    
       </div>
<form action="/course/update{{ $info->id }}" method="post" dir="rtl">
@method('PATCH')
    @csrf
   @include('layouts.emp.formCourse')
     
    </div>




<div class="row col-sm-12 mt-3" style="float:right" >
    
      <button class="btn btn-success" type="submit">1212حفظ التعديلات</button>
    </div>
</form>
@endsection