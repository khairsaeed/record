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
    
{{session(['product' => $product])}}

@csrf


    

<div class="content-header navbar-dark bg-dark">
  <div class="container">
    <div class="row mb-12">
      <div class="col-sm-2">
     <div class="row">  
        <div class="col-12">
          <a  class="btn btn-success "  href="{{Route('primeryMaterial.create')}} "> اضافة مادة اولية  </a></h1>

         </div>
        
      </div>
      </div><!-- /.col -->
      <div class="col-sm-10">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item active"></li>
          {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
        
          <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
         
          <li class="breadcrumb-item"> <a href="{{Route('factory.show',Session::get('factory')->id)}}">  {{  Session::get('factory')->name }}</a></li> 
          <li class="breadcrumb-item"> <a href="{{Route('activity.show',Session::get('record')->id)}}">  {{  Session::get('record')->record_nb }}</a></li> 
          <li class="breadcrumb-item"> <a href="{{Route('activity.show',Session::get('industry_activity')->id)}}">  {{  Session::get('industry_activity')->type }}</a></li> 
          <li class="breadcrumb-item">   {{    $product->public_name  }}</li> 
        {{-- ----------------------- --}}

       

        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

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
              المنتج:   {{  $product->public_name  }}
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
            <div class="card-body">





                  @include('layouts.product.formProduct')
     
            </div>
          </div>
        </div>
      </div>
   

   
       
      <div class="card card-danger" >
        <div class="card-header">
          <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" >
                المواد الاولية لهذا المنتج                </a>
          </h4>
        </div>
        <div id="collapseTwo" >
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
            <tr>
                <th>الاسم</th>
                <th>الوصف </th> 
                  <th>الرمز</th>
                <th>الاسم السلعي </th>
             
                <th>العلامة التجارية  </th>
                <th>الكمية السنوية  </th>
                
                <th> الواحدة  </th>
                <th> ملاحظات  </th>
      
                
                <th >action</th>
               
      
            </tr>
      
        </thead>
@foreach ($primeryMaterials as $row )
              


<th>{{$row->hs_name}}</th>
<th>{{$row->describe}}</th>
<th>{{$row->code}}</th>
<th>{{$row->public_name}}</th>
<th>{{$row->trading_flag}}</th>

<th>{{$row->ammount}}</th>
<th>{{$row->unit}}</th>
<th>{{$row->note}}</th>

<th > <div class="row">
  
    <form method="POST" action="{{ route('primeryMaterial.delete', $row->id) }}">

   @csrf

    &nbsp;<input name="_method" type="hidden" value="DELETE">

  <button type="submit" class="btn btn-xs btn-danger   " data-toggle="tooltip" title='Delete'>حذف</button>
  &nbsp;
  </form>
<a href="\primeryMaterial\edit\{{ $row->id }}" class="btn btn-info btn-xs"  data-method="PATCH" data-confirm="Are you sure?"> تعديل</a>
</div></th>
</tr>
@endforeach




</table>

</div>

</div>

</div>
</div>
</div>
</div>
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
        
        
       