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





   

{{-- //---------------------------------------------------------------------------- --}}

@section('content')

<div class="content-header navbar-dark bg-dark">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="float-sm-right">عرض مالكي المنشآت </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
           
                <li class="breadcrumb-item active"></li>
                {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
              
                <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
               
                 <li class="breadcrumb-item">عرض المالكين</li> 
            
          
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
    <div class="content">
       <div class="container">

          
          @if ($message = Session::get('mesCreate'))
                  <div class="alert alert-success" style="text-align: right;">
                    <p>{{ $message }}</p>
                 </div>
          @endif
        <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> --}}
            <!-- /.card-header -->
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
                    @foreach ($owners as $item)
                  
                  
                <tr  style="text-align:right;">
                    <td>{{$item->fname}}</td>
                    <td>{{$item->lname}}</td>
                    <td>{{$item->fatherName}}</td>
                    <td>{{$item->khana}}</td>
                    <td>{{$item->nationalNb}}</td>
                   
                    <td> 
                   <div class="row">
                       <div class="col-6">     <a href="\owner\edit\{{$item->id}}" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> تعديل</a>
                        
                        {{-- <a href="\factory\delete\{{$item->id}}"  class="btn btn-danger btn-xs"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a> --}}
                       </div>
                        <div class="col-6"><form method="POST" action="{{ route('owner.delete', $item->id) }}">

                            @csrf

                            <input name="_method" type="hidden" value="DELETE">

                            <button  class="btn btn-xs btn-danger btn-flat btn-xm "  title='Delete'>حذف</button>

                         </form>
                        </div>
                    </td>
                
                </tr> 
                 @endforeach
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>

       </div>
     <!-- /.container -->
   </div>
 <!-- /.content -->
  {{-- -------------------------------------------------- --}}

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

<script>
$(function () {
$("#example1").DataTable({
"responsive": true, "lengthChange": false, "autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
"responsive": true,
});
});
</script>


<script type="text/javascript">

 


    $('.show_confirm').click(function(event) {

         var form =  $(this).closest("form");

         var name = $(this).data("name");

         event.preventDefault();

         swal({

             title: `هل انت متأكد من حذف المنشأة؟`,

             text: " اذا تم حذف المنشأة لا يمكن التراجع عن الحذف و سيتم حذف كل مايتعلق بها من سجلات و تشاط صناعي و مالكين.",

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
 
<!-- Page specific script -->

@endsection