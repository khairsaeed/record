@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12" >
  <h3>اضافة عقوبة </h3>
  
  </div>
<form action="/punish/create/{{ $info->id }}" method="post" dir="rtl">
    @include('layouts.emp.formPunish')
    
    <div class="input-group-btn mb-2">
      <button class="btn btn-success" type="button"  onclick="education_fields();">+ 
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
    </div>


    
  <div class="clear"></div>
    
  
    <!-- <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
    {{-- <div class="panel-footer"><small><em><a href="http://shafi.info/">More Info - Developer Shafi (Bangladesh)</a></em></em></small></div> --}}
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
        '       <input type="text" class="form-control" id="kind" name="kind[]" value="" placeholder="نوع العقوبة" required></div>'+
       '<div class="col-sm-2 ">'+
        '      <input type="text" class="form-control" id="reson" name="reson[]" value="" placeholder="سبب العقوبة">'+
        '</div><div class="col-sm-2 nopadding">'+
     ' <input type="date" class="form-control" id="theDate" name="theDate[]" value="" placeholder="تاريخ العقوبة">'+
        '</div><div class="col-sm-2 nopadding">'+
        '<input type="text" class="form-control" id="doc" name="doc[]" value="" placeholder="صك العقوبة">'+
        '  </div><div class="col-sm-3 nopadding">'+
        ' <input type="text" class="form-control" id="duration'+ room +'" name="duration[]" value="" placeholder="مدة العقوبة" onkeyup="allnumeric(duration'+ room +');">'+
        ' </div><div class="input-group-btn">'+
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

<div class="row col-sm-12 mt-3">
 
    <button class="btn btn-success" type="submit">حفظ البيانات</button>
  </div>
</form>
@endsection