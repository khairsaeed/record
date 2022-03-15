

@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12" >
    <i class="fas fa-align-right    "><h3>الدورات</h3></i>
    
       </div>
<form action="/user/store/{{ $user->id }}" method="post" dir="rtl">

   @include('layouts.emp.users.formUser')
  

       
    
    </div>
 
  
  

</div>


<div class="row col-sm-12 " >
    <i class="fas fa-align-right    ">
      <button class="btn btn-success" type="submit">حفظ التعديلات</button>
    </i></div>
</form>
@endsection