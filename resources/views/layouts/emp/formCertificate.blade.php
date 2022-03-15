

@csrf
<div class="row col-12" dir="rtl">

<!-- ----------------------------------------------------->

<div id="education_fields"  class="row col-sm-12">
        
      
     <div class="col-sm-2 mb-2">

 
  <select class="form-control" id="scienceDegree" name="scienceDegree[]" >
    @foreach ($college as $item)
    
      <option  {{ $certificate->scienceDegree ===  $item->name  ? 'selected':''}} value='{{ $item->name }}'>{{ $item->name }}  </option>
   
  @endforeach
  </select>
</div>
<div class="col-sm-1 ">
  <input type="date" class="form-control" id="getDate" name="getDate[]" value="{{ $certificate->getDate }}" placeholder="تاريخ الشهادة">
</div>
<div class="col-sm-3 ">

  <input type="text" class="form-control" id="sptial" name="sptial[]" value="{{ $certificate-> sptial}}" placeholder="الاختصاص الدقيق">

</div>
<div class="col-sm-2 nopadding">

  <input type="text" class="form-control" id="univercity" name="univercity[]" value="{{ $certificate->univercity }}" placeholder="الجامعة ">

</div>
<div class="col-sm-2 nopadding">

  <input type="text" class="form-control" id="lastCert" name="lastCert[]" value="{{ $certificate-> lastCert}}" placeholder=" آخر شهادة حصل عليها">

</div>
<div class="col-sm-1 ">

  <input type="date" class="form-control" id="lastCertDate" name="lastCertDate[]" value="{{ $certificate-> lastCertDate}}" placeholder="تاريخ آخر شهادة ">

</div>
