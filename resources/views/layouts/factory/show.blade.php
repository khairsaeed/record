
    @extends('layouts.mainApp')

    @section('content')
        



    {{session(['factory' => $factory])}}

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route("factories")}}">عرض معلومات المنشأة</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        {{-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">المالكين
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              {{-- <li><a href="#">عرض المالكين </a></li> --}}
              {{-- <li><a href="{{Route('factory.owners.create',$factory)}}">اضافة </a></li> --}}
              {{-- <li><a href="#">Page 1-3</a></li> --}}
            {{-- </ul> --}}
          {{-- </li> --}} 
       
        <li class="nav-item">
          <a class="nav-link" href="{{Route('record.create',$factory)}}">اضافة سجل</a>
          <li><a class="nav-link"  href="{{Route('factory.owners.create',$factory)}}"> اضافة مالكين </a></li>
         
        </li>
      </ul>
      <span class="navbar-text">
        {{-- Navbar text with an inline element --}}
      </span>
    </div>
  </nav>
<form action="/factory/update/{{ $factory->id }}" method="post" dir="rtl">

    
   @include('layouts.factory.formFactory')
     
 




</form>

<div style="text-align: right"><h3> المالكين لهذه المنشأة</h1></div>

<table class="table table-bordered data-table">

  <thead>

      <tr>

         

          <th>الاسم</th>

          <th>الكنية</th>
         
          <th>خانة</th>
          <th>الرقم الوطني</th>

          <th width="100px">Action</th>

      </tr>

  </thead>

  <tbody>
    
      
    
    @foreach ($data as $row )
                
    <tr>   
    <th>{{$row->fname}}</th>
    <th>{{$row->lname}}</th>
    <th>{{$row->khana}}</th>
    <th>{{$row->nationalNb}}</th>
   

    <th width="100px"><a href="\factory_owner\delete\{{ $factory->id }}\{{$row->id}}" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a></th>

    </tr>
    @endforeach
    
  
  </tbody>

</table>




<div style="text-align: right"><h3> السجلات لهذه المنشأة</h1></div>
<table class="table table-bordered data-table">

  <thead>
      <tr>
          <th>الاسم</th>
          <th>رقم السجل</th>
          <th>رمز النشاط</th>
          <th>تاريخ السجل الصناعي</th>
          <th>نوع الصناعة</th>
          <th>القطاع</th>
          <th> قوانين ومراسيم الترخيص</th>
          <th> حالة المنشأة</th>

          <th width="60px"></th>
          <th ></th>

      </tr>

  </thead>

  <tbody>
    
      
    
    @foreach ($records as $row )
                
    <tr>   
    <th>{{$row->name}}</th>
    <th>{{$row->record_nb}}</th>
    <th>{{$row->code_work}}</th>
    <th>{{$row->record_date}}</th>
    <th>{{$row->industry_kind}}</th>
    <th>{{$row->type}}</th>
    <th>{{$row->law}}</th>
    <th>{{$row->factory_status}}</th>
    

    <th width="60px">
      <a href="\record\edit\{{ $factory->id }}\{{ $row->id }}" class="btn btn-secondary btn-sm"   data-confirm="Are you sure?"> تعديل</a>
    </th>
    <th >
   
      <form method="POST" action="{{ route('record.delete', $row->id) }}">

        @csrf

        <input name="_method" type="hidden" value="DELETE">

        <button type="submit" class="btn btn-xs btn-danger btn-flat btn-sm show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>

    </form>
  {{-- <a href="\record\delete\{{ $row->id }}" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a> --}}
    </th>
    <th >
      <a href="\activity\show\{{ $row->id }}" class="btn btn-danger btn-sm"   data-confirm="Are you sure?"> عرض</a>
    </th>
    </tr>
    @endforeach
    
  
  </tbody>

</table>



  
    <tbody>
      
        
      
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

 

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
  
  </body>
</html>


@endsection 
