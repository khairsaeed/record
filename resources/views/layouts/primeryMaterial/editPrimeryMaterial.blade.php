@extends('layouts2.main')





@section('content')
   

 
    <div class="content-header navbar-dark bg-dark">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
         <div class="row">  
            <div class="col-6">
              {{-- <a  class="btn btn-success "  href="{{Route('economicCategories')}} "> اضافة نشاط صناعي </a></h1> --}}

             </div>
            
          </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item active"></li>
              {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
            
              <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
             
              <li class="breadcrumb-item"> <a href="{{Route('factory.show',Session::get('factory')->id)}}">  {{  Session::get('factory')->name }}</a></li> 
              <li class="breadcrumb-item"> <a href="{{Route('activity.show',Session::get('record')->id)}}">  {{  Session::get('record')->id }}</a></li> 
              <li class="breadcrumb-item">   {{  Session::get('record')->record_nb }}</li> 
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    


    <div class="col-md-12">
      <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title">Collapsible Accordion</h3>
        </div>
        <!-- /.card-header --> --}}
        <div class="card-body"  style=" text-align: right;">
          <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
          <div id="accordion">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                   حفظ التعديلات للمادة الاولية :   {{  Session::get('product')->public_name }}
                  </a>
                </h4>
              </div>
              <div id="collapseOne" >
                <div class="card-body">


<form action="{{ route('primeryMaterial.update',$primeryMaterial->id) }}" method="post" dir="rtl">
           @method('PATCH')
            @csrf
   
   
    @include('layouts.primeryMaterial.formPrimeryMaterial')



    <div class="row col-sm-12" >
        
          <button class="btn btn-success" type="submit">حفظ التعديلات</button>
        </div>
          </div>
          </form>

          </div>
          </div>
          </div>



          </div>
                </div>
    </div>
    



@endsection 

