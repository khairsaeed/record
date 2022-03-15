@extends('layouts.app')

@section('content')
    

<form action="{{ route('material.store') }}" method="post" dir="rtl">
    @include('layouts.material.formMaterial')



    <div class="row col-sm-12" >
        
          <button class="btn btn-success" type="submit">حفظ التعديلات</button>
        </div>
</div>
</form>

@endsection 