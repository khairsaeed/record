@extends('layouts2.main')



@section('addtionalStyle')
<meta name="csrf-token" content="{{ csrf_token() }}" />
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


<div class="content-header navbar-dark bg-dark">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
      
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item active"></li>
            {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
          
            <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
           
             <li class="breadcrumb-item">   {{$factory->name }}</li> 
          
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->




<div class="container" >

  


    <div class="row">
        <div class="col-md-12">
          <div class="card" style="padding-top: 0em; text-align: right;">
           
            <!-- /.card-header -->
            <div class="card-body" style="padding-top: 0em;">
              <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
              <div id="accordion">
      
      
                <div class="card card-primary">
                  <div class="card-header">
                    <h4 class="card-title w-100">
                      <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                       اضافة مالكين لمنشأة : {{$factory->name}}
                      </a>
                    </h4>
                  </div>
                  <div id="collapse2" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                      
      
                      <form action="" method="POST">   
                          <div class="row"> 
                             <div class="col-md-6">
                               <div class="input-group mb-3">  
                                            <input type="text" class="form-control"   placeholder="بحث حسب الكنية" id="search">   
                                     <div class="input-group-prepend">             
                             <span class="input-group-text" id="basic-addon1">
                              
                              </span></div></div></div></div>
                            
                      </form>

                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                  
                            <tr>
                                        
                
                      
                  
                <th>الاسم</th>

                <th>الكنية</th>
                <th>اسم الاب</th>
                <th>خانة</th>
                <th>الرقم الوطني</th>

                <th width="50px">Action</th>
      
                               
                           </tr>
                        </thead>
                        <tbody>
                         
                        </tbody>  
                       </table>
     
                    </div>
                  </div>
                </div>
              </div>
            </div>
                 
          </div>{{-- end div card --}}
        </div>
      </div>
      {{-- end div row --}}
      
      
      
      
      {{-- ------------------------ card ------------------- --}}

        
      

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
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
      </script>{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      
         
      
      <script type="text/javascript">
      
       
// $(function () {
// $("#example1").DataTable({
// "responsive": true, "lengthChange": false, "autoWidth": false,"select":true,
// "buttons": ["copy", "csv", "excel", 
// //"pdf",
//  "print", "colvis"],


// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');




// $('#example2').DataTable({
// "paging": true,
// "lengthChange": false,
// "searching": false,
// "ordering": true,
// "info": true,
// "autoWidth": false,
// "responsive": true,
// });
// });


// $('#example1 tbody').on( 'click', 'tr', function () {
//     console.log( $('#example1').DataTable().row( this ).data() );
// } );

      
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
      {{-- //--------------------ajax search .................... --}}

      <script>
      
      $('#search').on('keyup', function(){    search();});
      
      
      //search();
        function search(){   
            var keyword = $('#search').val();  
            if(keyword.length>= 3){
               $.post('{{ route("factoryowners.search") }}',   
                  {         _token: $('meta[name="csrf-token"]').attr('content'), 
                          keyword:keyword  
                             }, 
              function(data){      
                  table_post_row(data);
                  
                  // console.log(data);   
                      })
                    };
                  
                  }// table row with ajaxfunction 
                     
                     
                   




                     
                    function  table_post_row(res){
                        let htmlView = '';
                       //  let routStr=`<td> <div class="row">    <form method="post" action="{{route("factory.owners.store" ,`; 
                        //  let     routStr1=`)}}" @csrf <button type="submit" name="save" class="btn btn-info btn-sm" title="اضافة"><i  class="glyphicon glyphicon-edit"></i>اضافة</button>    </form>  </div>  </td>  </tr> `; 

                      if(res.owners.length <= 0){ 
                           htmlView+= `    <tr>       <td colspan="4">No data.</td>      </tr>`;
                           }
                       /*    for(let i = 0; i < res.owners.length; i++){
                                 htmlView += `        <tr>           <td>`+  res.owners[i].fname +`</td>              <td>`+
                                 res.owners[i].lname+
                                 `</td>               <td>`+res.owners[i].fatherName+
                                 `</td>               <td>`+res.owners[i].khana+
                                  `</td>               <td>`+res.owners[i].nationalNb+
                                    `</td>               <td> <div class="row"> `;


                                      */
                                        
                                                                          


                                // console.log (routStr);
                                 console.log (routStr);    
                                   
                                     $('tbody').html(htmlView);
                               
                                 }
                                 
                                 
       </script>




      @endsection
