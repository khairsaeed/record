
@extends('layouts.emp.emp')

@section('content')
    
<div class="row col-sm-12 mb-2" >
    <h3>الخبرات السابقة التي اكتسبها</h3>
</div>
<form action="/exExpert/store/{{ $info->id }}" method="post" dir="rtl">

   @include('layouts.emp.formExExpert')
  

        <div class="input-group-btn mb-3">
          <button class="btn btn-success" type="button"  onclick="education_fields();">+
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
        </div>
    
  
  <!-- <div class="clear"></div> -->
    
  
    <!-- <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs">
      </span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span>
         to remove form field :)</small>
    </div> -->
  
  
  <script>
  
  
  var room = 1;
  function education_fields() {
   
      room++;
      var objTo = document.getElementById('education_fields')
      var divtest = document.createElement("div");
      divtest.setAttribute("class", "form-group row col-sm-12 removeclass"+room);
      var rdiv = 'removeclass'+room;
      divtest.innerHTML = '<div class="col-sm-11 ">'+
        '       <input type="text" class="form-control" id="title" name="title[]" value="" placeholder="الخبرات السابقة " required></div>'+
        ' <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');">-'+
        ' <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>'+
        '</div><div class="clear"></div>';

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
  @endsection