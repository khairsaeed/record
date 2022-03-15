
@extends('layouts.emp.emp')

@section('content')
<div class="row col-sm-12 mb-3" >
<h3>تعديل الشهادة العلمية  </h3>
</div>
<form action="/certificate/{{ $info->id }}/update/{{ $certificate->id }}" method="post" dir="rtl">
@method('PATCH')
@include('layouts.emp.formCertificate')

      
    
    <!-- </div> -->
  <div class="clear"></div>
    
  </div>
  
  
  

<!-- </div> -->
<!-- <div class="row"></div> -->
<div class="row col-sm-12 mt-3">
    
    <button class="btn btn-success" type="submit">حفظ البيانات</button>
    </div>
</form>
@endsection