
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12" >
    <h3>تعديل ايفاد </h3>
    
       </div>
<form action="/studyOut/{{ $info->id }}/update/{{ $studyTravel->id }}" method="post" dir="rtl">
@method('PATCH')
  @include('layouts.emp.formStudyOut')

        <!-- <div class="input-group-btn">
          <button class="btn btn-success" type="button"  onclick="education_fields();">+ 
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
        </div> -->
    
    <!-- </div>
 

</div> -->

<div class="row col-sm-12 mt-3">
  
    <button class="btn btn-success" type="submit">حفظ البيانات</button>
  </div>
</form>
@endsection