@extends('layouts2.main')



@section('addtionalStyle')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

<!-- Toastr -->
<link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
@endsection


    @section('content')
  
    {{session(['factory' => $factory])}}

    
<div class="content-header navbar-dark bg-dark">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
     <div class="row">  
        <div class="col-3">
          <a class="nav-link" href="{{Route('record.create',$factory)}}">اضافة سجل</a>
         </div>
         <div class="col-3">
          <a class="nav-link"  href="{{Route('factory.owners.create',$factory)}}"> اضافة مالكين </a>
        </div> 
      </div>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item active"></li>
          {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
        
          <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
         
           <li class="breadcrumb-item">   {{  $factory->name }}</li> 
        
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
                {{  $factory->name }}
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
            <div class="card-body">
              @include('layouts.factory.formFactory')
            </div>
          </div>
        </div>


        <div class="card card-danger" >
          <div class="card-header">
            <h4 class="card-title w-100">
              <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                المالكين لهذه المنشأة
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
          
                    <tr>
                                
                        <th>الاسم</th>

                        <th>الكنية</th>
                        <th>اسم الاب</th>
                        <th>خانة</th>
                        <th>الرقم الوطني</th>

                        <th width="100px">Action</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($owners as $row)
                  
                  
                   <tr  style="text-align:right;">
                    <th>{{$row->fname}}</th>
                    <th>{{$row->lname}}</th>
                    <th>{{$row->fatherName}}</th>
                    <th>{{$row->khana}}</th>
                    <th>{{$row->nationalNb}}</th>
                        <td><div class="row"> 
                            
                              <a href="\factory_owner\delete\{{ $factory->id }}\{{$row->id}}" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a>
                            </div>
                        </td>
                    
                    </tr> 
                    @endforeach
                  
               </table>
            </div>
          </div>
        </div>
        <div class="card card-success">
          <div class="card-header">
            <h4 class="card-title w-100">
              <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" >
                السجلات لهذه المنشأة
              </a>
            </h4>
          </div>
          <div id="collapseThree" >
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
          
                    <tr>
                      
                        <th>رقم السجل</th>
                        <th>نوع النشاط</th>
                        <th>تاريخ السجل</th>
                        <th>نوع الصناعة</th>
                        <th>القطاع</th>
                        <th> قوانين ومراسيم الترخيص</th>
                        <th> حالة المنشأة</th>
                        <th width="100px">Action</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($records as $row)
                   
                    <th>{{$row->record_nb}}</th>
                    <th>{{$row->code_work}}</th>
                    <th>{{$row->record_date}}</th>
                    <th>{{$row->industry_kind}}</th>
                    <th>{{$row->type}}</th>
                    <th>{{$row->law}}</th>
                    <th>{{$row->factory_status}}</th>
                        <td><div class="row"> 
                            
                          <a href="\record\edit\{{ $factory->id }}\{{ $row->id }}" class="btn btn-secondary btn-xs"   data-confirm="Are you sure?"> تعديل</a>
                       
                          <form method="POST" action="{{ route('record.delete', $row->id) }}">

                            @csrf
                    
                            <input name="_method" type="hidden" value="DELETE">
                    
                            <button type="submit" class="btn btn-xs btn-danger btn-flat  " data-toggle="tooltip" title='Delete'>Delete</button>
                    
                        </form>
                        <a href="\activity\show\{{ $row->id }}" class="btn btn-danger btn-xs"   data-confirm="Are you sure?"> عرض</a>

                        </div>
                        </td>
                    
                    </tr> 
                    @endforeach
                  
               </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


        
      

@endsection 


@section('addtionalScript')
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->


   

<script type="text/javascript">

 
$(function () {
$("#example1").DataTable({
"responsive": true, "lengthChange": false, "autoWidth": false,
"buttons": ["copy", "csv", "excel", 
//"pdf",
 "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});

 
$(function () {
$("#example2").DataTable({
"responsive": true, "lengthChange": false, "autoWidth": false,
"buttons": ["copy", "csv", "excel", 
//"pdf",
 "print", "colvis"]
}).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

});

  $('.show_confirm').click(function(event) {

       var form =  $(this).closest("form");

       var name = $(this).data("name");

       event.preventDefault();

       swal({

           title: `هل انت متأكد من حذف السجل؟`,

           text: "اذا تم حذف السجل لا يمكن التراجع عن الحذف.",

           icon: "warning",

           buttons: true,

           dangerMode: true,

       })

       .then((willDelete) => {

         if (willDelete) {

           form.submit();

         }

       });

   });



</script>

@endsection