
    @csrf
    <div class="row col-12" dir="rtl">

<!-- ----------------------------------------------------->
   
  
    <div id="education_fields"  class="row col-sm-12 ">
         <div class="col-sm-2 ">
    
      <input type="text" class="form-control" id="kind" name="kind[]" value="{{ $studyTravel-> kind}}" placeholder="نوع الايفاد" required>
   
  </div>
  <div class="col-sm-2 ">
      <input type="text" class="form-control" id="reson" name="reson[]" value="{{ $studyTravel->reson }}" placeholder="سبب الايفاد">
   </div>
  <div class="col-sm-2">
    
      <input type="date" class="form-control" id="theDate" name="theDate[]" value="{{ $studyTravel-> theDate}}" placeholder="تاريخ الايفاد">
    
  </div>
  <div class="col-sm-2 nopadding">
  
      <input type="text" class="form-control" id="doc" name="doc[]" value="{{ $studyTravel->doc }}" placeholder="صك الايفاد ">
    
  </div>
  <div class="col-sm-3 nopadding">
    
      <input type="text" class="form-control" id="relation" name="relation[]" value="{{ $studyTravel->relation }}" placeholder="علاقة الايفاد بالعمل الوظيفي">
    
  </div>