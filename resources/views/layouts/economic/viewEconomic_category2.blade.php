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

    <div class="pull-left" style="text-align: center">
        <h2> دليل تصنيف النشاط الصناعي</h2>
    </div>
   
<div class="container" dir="rtl">
    
    {{-- ------------------------------------------------------------ --}}
 
    <form action="{{ route('activity.create') }}" method="post">
        @csrf
    <div class="row" dir="rtl" style="text-align: right">
       
        <table class="table table-light">
            <tbody>
                <tr>
                    <td>الباب:</td>
                    <td>
                        <select name="unite" id="unite"  class="border shadow p-2 bg-white">
                            <option value=''>اختر الباب</option>
                            @foreach($unites as $vall)
                                <option value={{ $vall->unite }} >{{ $vall->type }}</option>
                            @endforeach
                        </select>  
                    </td>
                </tr>
                <tr>
                    <td> المجموعة:</td>
                    <td>
                        <select  name="groups"  id="groups" class="border shadow p-2 bg-white">
                            <option value=''> اختر المجموعة</option>
                            {{-- @foreach($groupss as $vall)
                                <option value={{ $vall->groups }}>{{ $vall->type }}</option>
                            @endforeach --}}
                        </select>
                    </td>
                </tr>
    
            </tr>
            <tr>
                <td> الفئة:</td>
                <td>
                    <select  name="chapter" id="chapter"  class="border shadow p-2 bg-white">
                        <option value=''> اختر الفئة</option>
                        {{-- @foreach($chapters as $vall)
                            <option value={{ $vall->chapter }}>{{ $vall->type }}</option>
                        @endforeach --}}
                    </select>  
                </td>
            </tr>
        </tr>
        <tr>
            <td>الفرع: </td>
            <td>
                <select  name="branch" id="branch"  class="border shadow p-2 bg-white">
                    <option value=''> اختر الفرع</option>
                    {{-- @foreach($branchs as $vall)
                        <option value={{ $vall->branch }}>{{ $vall->type }}</option>
                    @endforeach --}}
                </select>
            </td>
        </tr>
    
        <tr>
            <td>النشـــــاط:</td>
            <td>
                <select  name="code"  id="code"   class="border shadow p-2 bg-white">
                    <option value=''> اختر النشـــــاط</option>
                    {{-- @foreach($datas as $vall)
                        <option value={{ $vall->code }}>{{ $vall->type }}</option>
                    @endforeach --}}
                </select>
            
            </td>
        </tr>
        <tr>
            <td>الترميز</td>
            <td>
          <h5 id="labelCode"><p> </p> </h5> </td>
        </tr>
            </tbody>
        </table>
        {{-- @if (!empty($code))
            
       <button type="submit" class=""btn btn-success">اختر</button>
            
        @endif --}}
    
   

        <script type='text/javascript'>

            $(document).ready(function(){
        
              // Department Change
              $('#unite').change(function(){
        
                 // Department id
                 var id = $(this).val();
        
                 // Empty the dropdown
                 $('#groups').find('option').not(':first').remove();
        
                 // AJAX request 
                 $.ajax({
                   url: 'getGroupss/'+id,
                   type: 'get',
                   dataType: 'json',
                   success: function(response){
        
                     var len = 0;
                     if(response['data'] != null){
                       len = response['data'].length;
                     }
        
                     if(len > 0){
                       // Read data and create <option >
                       for(var i=0; i<len; i++){
        
                         var id = response['data'][i].groups;
                         var name = response['data'][i].type;
        
                         var option = "<option value='"+id+"'>"+name+"</option>"; 
        
                         $("#groups").append(option); 

                         $('#labelCode').find('p').remove();
        $('#labelCode').find('button').remove();
        $('#labelCode').find('br').remove();
                       }
                     }
        
                   }
                });
              });
        // --------------------------------------------

        $('#groups').change(function(){
        
        // Department id
        var id = $(this).val();

        // Empty the dropdown
        $('#chapter').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
          url: 'groups_change/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){

            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
            }

            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){

                var id = response['data'][i].chapter;
                var name = response['data'][i].type;

                var option = "<option value='"+id+"'>"+name+"</option>"; 

                $("#chapter").append(option); 

                $('#labelCode').find('p').remove();
        $('#labelCode').find('button').remove();
        $('#labelCode').find('br').remove();
              }
            }

          }
       });
     });

// -----------------------------------------------------

$('#chapter').change(function(){
        
        // Department id
        var id = $(this).val();

        // Empty the dropdown
        $('#branch').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
          url: 'chapter_change/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
           
            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
            }

            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){

                var id = response['data'][i].branch;
                var name = response['data'][i].type;

                var option = "<option value='"+id+"'>"+name+"</option>"; 

                $("#branch").append(option); 

                $('#labelCode').find('p').remove();
        $('#labelCode').find('button').remove();
        $('#labelCode').find('br').remove();
              }
            }

          }
       });
     });

//--------------------------------------------
$('#branch').change(function(){
        
        // Department id
        var id = $(this).val();

        // Empty the dropdown
        $('#code').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
          url: 'branch_change/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){

            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
            }

            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){

                var id = response['data'][i].code;
                var name = response['data'][i].type;

                var option = "<option value='"+id+"'>"+name+"</option>"; 

                $("#code").append(option); 

                $('#labelCode').find('p').remove();
        $('#labelCode').find('button').remove();
        $('#labelCode').find('br').remove();
              }
            }

          }
       });
     });

//--------------------------------------------------
$('#code').change(function(){
        
        // Department id
        var id = $(this).val();
        $('#labelCode').find('p').remove();
        $('#labelCode').find('button').remove();
        $('#labelCode').find('br').remove();

        $("#labelCode").append("<p>"+id+"</p>"); 
        $("#labelCode").append(' <br><button type="submit" class="btn btn-success">اختر</button>'); 
       
     });

//------------------------------
            });
        
            </script>

</html>