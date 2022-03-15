<!DOCTYPE html>

<html>

<head>

    <title>جدول النشاط الصناعي</title>
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
   
<script type="text/javascript" src="{{ asset('DataTables/datatables.min.js')}}"></script> --}}

</head>

<body dir="rtl">

    

<div class="container" dir="rtl">

    <div class="row" dir="rtl">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               <div class="card">
                   <div class="card-body">
                       <h2 class="card-title" >جدول المنتجات hs </h2>
                       <p class="card-text">
                           
                             
                    </p>
                </div>
            </div> 
         </div>
                        
               
            {{-- <div class="pull-left">
                @can('owner-create')
                <a class="btn btn-success" href="{{ route('economic.category.select','operation') }}"> اضافة مالك جديد</a>
                @endcan
            </div> --}}
        </div>
    </div>


    @if ($message = Session::get('mesCreate'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered data-table">

        <thead>

            <tr>

               

                <th>الاسم</th>

                <th>الترميز</th>
                <th>وصف</th>
               
                <th width="100px">Action</th>

            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>

</div>

   

</body>

   

<script type="text/javascript">

  $(function () {

    

    var table = $('.data-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: "{{ route('productStandards') }}",

        columns: [
            {data: 'name', name: 'name'}, 
            {data: 'code', name: 'code'},
            {data: 'describe', name: 'type'},

            {data: 'action', name: 'action', orderable: false, searchable: false},

        ]

    });

    

  });

</script>

</html>