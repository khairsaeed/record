<div class="row col-12" dir="rtl">

    <!-- ----------------------------------------------------->
    <script>
    function allnumeric(inputnum)
            {
                var numbers = /^[0-9]+$/;
                if(!inputnum.value.match(numbers))
                {
                Swal.fire({
                            text: '!! يرجى ادخال أرقام فقط',
                            icon: 'info',
                            confirmButtonText: 'ok'
                    });
                    inputnum.value="";
                    return false;
                }
            }
	</script>
      
        <div id="education_fields"  class="row col-sm-12 ">
             <div class="col-sm-2 ">
        
          <input type="text" class="form-control" id="name" name="name[]" value="{{ $course-> name}}" placeholder="اسم الدورة" required>
       
      </div>
      <div class="col-sm-2 ">
          <input type="text" class="form-control" id="duration" name="duration[]" value="{{ $course->duration }}" placeholder="مدة الدورة (بالأيام)" onkeyup="allnumeric(duration);">
       </div>
      <div class="col-sm-2">
        
          <input type="text" class="form-control" id="place" name="place[]" value="{{ $course->place }}" placeholder="مكان الدورة">
        
      </div>
      <div class="col-sm-2 nopadding">
      
          <input type="text" class="form-control" id="kind" name="kind[]" value="{{ $course->kind }}" placeholder="نوع الدورة ">
        
      </div>
      <div class="col-sm-2 nopadding">
      
        <input type="text" class="form-control" id="hourCount" name="hourCount[]" value="{{ $course->hourCount }}" placeholder="ساعات التدريب" onkeyup="allnumeric(hourCount);">
      
    </div> 
    <div class="col-sm-2 mb-3 nopadding">
      
<!--         <input type="text" class="form-control" id="gov" name="gov[]" value="{{ $course->gov }}" placeholder="حكومي  "> -->
    	<select class="form-control" id="gov" name="gov[]">
        	 <option {{ $course->gov=='حكومي' ? 'selected':''}} value="حكومي">حكومي</option>
   			 <option  {{ $course->gov=='خاص' ? 'selected':''}} value="خاص">خاص</option>
    	</select>
      
    </div> <div class="col-sm-2 nopadding">
      
        <input type="text" class="form-control" id="private" name="private[]" value="{{ $course->private }}" placeholder="معهد/مركز  ">
      
    </div>
    <div class="col-sm-2 mb-3 nopadding">
      
        <input type="date" class="form-control" id="date" name="date[]" value="{{ $course->date }}" placeholder="تاريخ الدورة">

    </div>
      <div class="col-sm-7 nopadding">
        
<!--           <input type="text" class="form-control" id="relation" name="relation[]" value="{{ $course-> relation}}" placeholder="علاقة الدورة بالعمل"> -->
        <select id="relation" name="relation[]" class="form-control">
         
        	<option {{ $course->relation=='نعم' ? 'selected':''}} value="نعم">نعم</option>
	 		 <option {{ $course->relation=='لا' ? 'selected':''}} value="لا">لا</option>
		</select>
      </div>
   
      