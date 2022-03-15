@extends('layouts2.main')

@section('content')
    
<div class="content-header navbar-dark bg-dark">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="float-sm-right">تعديل سجل  رقم : {{$record->record_nb}}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item active"></li>
          {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
        
          <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
          <li class="breadcrumb-item"><a href="{{Route('factory.show',Session::get('factory'))}}">{{Session::get('factory')->name}}</a></li>
         
           <li class="breadcrumb-item">تعديل سجل: </li> 
        
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->



<form action="/record/update/{{ $record->id }}" method="post" dir="rtl">
@method('PATCH')
    @csrf
   @include('layouts.record.formRecord')
     
   

</div>


<div class="row col-sm-12 mt-3"  style="float:right"  >
    
      <button class="btn btn-success" type="submit">حفظ التعديلات</button>
    </div>
</form>
@endsection