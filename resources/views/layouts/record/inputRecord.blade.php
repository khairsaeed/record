@extends('layouts2.main')

@section('content')
    
<div class="content-header navbar-dark bg-dark">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="float-sm-right">اضافة سجل الى منشأة : {{Session::get('factory')->name}}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item active"></li>
          {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
        
          <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
          <li class="breadcrumb-item"><a href="{{Route('factory.show',Session::get('factory'))}}">{{Session::get('factory')->name}}</a></li>
         
           <li class="breadcrumb-item">اضافة سجل: </li> 
        
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->




<form action="{{ route('record.store') }}" method="post" dir="rtl">
    @include('layouts.record.formRecord')



    <div class="row col-sm-12" >
        
          <button class="btn btn-success" type="submit">حفظ التعديلات</button>
        </div>
</div>
</form>

@endsection 