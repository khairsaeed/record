
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12" >
    <i class="fas fa-align-right    "><h3>تعديل مستخدم </h3></i>
    
       </div>
<form action="/user/{{ $user->id }}/update/{{ $user->id }}" method="post" dir="rtl">
@method('PATCH')
  @include('layouts.emp.users.formUser')

           </div>
 

</div>

<div>
    <button type="submit">حفظ البيانات</button>
</div>
</form>
@endsection