@extends('layouts.emp.emp')

@section('content')
    

<form action="/info/store" method="post" dir="rtl">
    @include('layouts.emp.formEmp')



    <div class="row col-sm-12" >
        
          <button class="btn btn-success" type="submit">حفظ التعديلات</button>
        </div>
</div>
</form>

@endsection