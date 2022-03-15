@extends('layouts.emp.emp')

@section('content')
<div class="row col-sm-12 mb-3"><!-- samer update -->
<h3>الشهادات العلمية</h3>
</div><!-- samer update -->
<form action="/certificate/store/{{ $info->id }}" method="post" dir="rtl">

@include('layouts.emp.formCertificate')

        <div class="input-group-btn">
          <button class="btn btn-success" type="button"  onclick="education_fields();">+
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
        </div>
    
    </div>
  <!-- <div class="clear"></div>
    
  
    <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
    </div> -->
  
  
  
  <script>
  
  
  var room = 1;
  function education_fields() {
   
      room++;
      var objTo = document.getElementById('education_fields')
      var divtest = document.createElement("div");
      divtest.setAttribute("class", "form-group row col-sm-12 removeclass"+room);
      var rdiv = 'removeclass'+room;
      divtest.innerHTML = '<div class="col-sm-2 "> <input type="text" class="form-control" id="scienceDegree" name="scienceDegree[]" value="" placeholder="المؤهل العلمي"></div><div class="col-sm-1 "> <input type="date" class="form-control" id="getDate" name="getDate[]" value="" placeholder="تاريخ الشهادة"></div><div class="col-sm-3 "><input type="text" class="form-control" id="sptial" name="sptial[]" value="" placeholder="الاختصاص الدقيق"></div><div class="col-sm-2 nopadding"><input type="text" class="form-control" id="univercity" name="univercity[]" value="" placeholder="الجامعة "></div><div class="col-sm-2 nopadding"><input type="text" class="form-control" id="lastCert" name="lastCert[]" value="" placeholder=" آخر شهادة حصل عليها">  </div><div class="col-sm-1 nopadding"><input type="date" class="form-control" id="lastCertDate" name="lastCertDate[]" value="" placeholder="تاريخ آخر شهادة "></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');">- <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button> </div></div></div></div><div class="clear"></div>';

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