
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-2" >
  <h3>تعديل عقوبة </h3>
  
  </div>
<form action="/punish/{{ $info->id }}/update/{{ $punish->id }}" method="post" dir="rtl">
    @method('PATCH')
    @include('layouts.emp.formPunish')
    
  <div class="clear"></div>
    
  

</div>


<div class="row col-sm-12 mt-2" >
  
    <button class="btn btn-success" type="submit">حفظ التعديلات</button>
  </div>
</form>
@endsection