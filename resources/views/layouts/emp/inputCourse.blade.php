@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-3" >
    <h3>الدورات</h3>
    
</div>
<div class="row col-sm-12 " >
<form action="/course/store/{{ $info->id }}" method="post" dir="rtl">
@csrf
   @include('layouts.emp.formCourse')
  

        <div class="col-sm-1 nopadding">
          <button class="btn btn-success" type="button"  onclick="education_fields();">+ 
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
        </div>
    
 </div>
</div>
 <div class="clear"></div>
    
  
    <!-- <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
    </div> -->
  
  
  <script>
  
  
  var room = 1;
  function education_fields() {
   
      room++;
      var objTo = document.getElementById('education_fields')
      var divtest = document.createElement("div");
      divtest.setAttribute("class", "form-group row col-sm-12 removeclass"+room);
      var rdiv = 'removeclass'+room;
      divtest.innerHTML = '<div class="col-sm-2 ">'+
        '       <input type="text" class="form-control" id="name" name="name[]" value="" placeholder="اسم الدورة"></div>'+
       '<div class="col-sm-2 ">'+
        '      <input type="text" class="form-control" id="duration'+ room +'" name="duration[]" value="" placeholder="مدة الدورة (بالأيام)" onkeyup="allnumeric(duration'+ room +');">'+
        '</div><div class="col-sm-2 nopadding">'+
     ' <input type="text" class="form-control" id="place" name="place[]" value="" placeholder="مكان الدورة">'+
        '</div><div class="col-sm-2 nopadding">'+
        '<input type="text" class="form-control" id="kind" name="kind[]" value="" placeholder="نوع الدورة ">'+
        '  </div>'+
         ' <div class="col-sm-2 nopadding">'+
      
     ' <input type="text" class="form-control" id="hourCount'+ room +'" name="hourCount[]" value="{{ $course->hourCount }}" placeholder="ساعات التدريب" onkeyup="allnumeric(hourCount'+ room +');">'+
    
  '</div> '+
 ' <div class="col-sm-2 mb-3 nopadding">'+
    
   '   <select class="form-control" id="gov" name="gov[]"><option {{ $course->gov=='حكومي' ? 'selected':''}} value="حكومي">حكومي</option><option  {{ $course->gov=='خاص' ? 'selected':''}} value="خاص">خاص</option></select>' +
    
 ' </div> <div class="col-sm-2 nopadding">'+
    
  '    <input type="text" class="form-control" id="private" name="private[]" value="{{ $course->private }}" placeholder="معهد/مركز  ">'+
   '</div><div class="col-sm-2 mb-3 nopadding"><input type="date" class="form-control" id="date" name="date[]" value="{{ $course->date }}" placeholder="تاريخ الدورة">'+ 
  '</div><div class="col-sm-7 nopadding">'+

        '<select name="relation" class="form-control"><option disabled>علاقة الدورة بالعمل</option> <option {{ $course->relation=="نعم" ? 'selected':''}} value="نعم">نعم</option><option {{ $course->relation=='لا' ? 'selected':''}} value="لا">لا</option></select>'+
   		
        ' </div><div class="col-sm-1 nopadding">'+
        ' <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');">-'+
        ' <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>'+
        ' </div></div></div></div><div class="clear"></div>';

objTo.appendChild(divtest)
  }
     function remove_education_fields(rid) {
         $('.removeclass'+rid).remove();
     }
  </script>
  

</div>


<div class="row col-sm-12 " >
    
      <button class="btn btn-success" type="submit">حفظ التعديلات</button>
    </div>
</form>
</div>
@endsection