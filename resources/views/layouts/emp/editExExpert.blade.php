
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-2" >
    <h3>تعديل الخبرات السابقة</h3>
    
       </div>
<form action="/exExpert/{{ $info->id }}/update/{{ $exExpert->id }}" method="post" dir="rtl">
@method('PATCH')
    @csrf
   @include('layouts.emp.formExExpert')
     
    

</div>


<div class="row col-sm-12 mt-3" >
    
      <button class="btn btn-success" type="submit">حفظ التعديلات</button>
    </div>
</form>
@endsection