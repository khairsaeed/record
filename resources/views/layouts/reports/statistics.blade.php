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

    <div class="content-header navbar-dark bg-dark">
        <div class="container ">
            <div class="row mb-2 ">
                <div class="col-sm-6 ">
                    <h1 class="float-sm-right">عرض التقارير</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        {{-- <li class="breadcrumb-item active"></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li> --}}
                        {{-- <li class="breadcrumb-item"><a href="#">عرض المنشآت</a></li> --}}
                        <li class="breadcrumb-item">عرض تقارير</li>


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

                            <th>المديرية</th>
                            <th>عدد المنشات المدخلة</th>
                           
                            <th>عدد المنشات المدخلة التي ليس لها سجلات</th>

                        </tr>
                        </thead>
                        <tbody>
                    
@for ($i=0;$i<count($newArray);$i++)
      <tr style="text-align:right;">
                                <td>{{$newArray[$i][1]}}</td>
                                <td>{{$newArray[$i][2]}}</td>
                            
                                <td>{{$newArray[$i][4]}}</td>
                            </tr>
@endfor

                          
                    

                    </table>
                </div>
                <!-- /.card-body -->
            </div>

            <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> --}}
            <!-- /.card-header -->

           
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

        var docDefinition = {
            // content: (...),
            defaultStyle: {
                font: 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'
            }
        }

        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 20,
                select: {
                    info: true
                },
                "buttons": ["copy", "csv", "excel",
//"pdf",
                    "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,

                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


    <!-- Page specific script -->

@endsection
