@extends('layouts.emp.emp')

@section('content')
    

<form action="/info/update/{{ $info->id }}" method="post" dir="rtl">
    @method('PATCH')
    @include('layouts.emp.formEmp')

    <div class="row col-sm-12 " >
        
<button class="btn btn-success" type="submit">حفظ التعديلات</button>
        </div>
</div>
</form>

@endsection