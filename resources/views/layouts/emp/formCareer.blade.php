<div class="row col-12" dir="rtl">
      <div class="col-sm-2 ">
        
          <input type="text" class="form-control" id="main_dep" name="main_dep[]" value="{{ $career->main_dep}}" placeholder="الجهة العامة" required>
       
      </div>
      <div class="col-sm-2 ">
          <input type="text" class="form-control" id="cur_dep" name="cur_dep[]" value="{{ $career->cur_dep }}" placeholder="الوحدة التنظيمية" onkeyup="allnumeric(duration);">
       </div>
      <div class="col-sm-2">
        
          <input type="text" class="form-control" id="job_title" name="job_title[]" value="{{ $career->job_title }}" placeholder="المسمى الوظيفي">
        
      </div>
      <div class="col-sm-2 nopadding">
      
          <!-- <input type="text" class="form-control" id="job_rel" name="job_rel[]" value="{{ $career->job_rel }}" placeholder="العلاقة الوظيفية "> -->
          <select class="form-control" id="job_rel" name="job_rel[]">
        	 <option {{ $career->job_lvl=='دائم' ? 'selected':''}} value="دائم">دائم</option>
   			 <option  {{ $career->job_lvl=='مؤقت' ? 'selected':''}} value="مؤقت">مؤقت</option>
    	    </select>
      </div>
      <div class="col-sm-2 mb-3 nopadding">
      
    	<select class="form-control" id="job_lvl" name="job_lvl[]">
        	 <option {{ $career->job_lvl=='1' ? 'selected':''}} value="1">1</option>
   			 <option  {{ $career->job_lvl=='2' ? 'selected':''}} value="2">2</option>
    	</select>
      
    </div>
      <div class="col-sm-2 nopadding">
      
        <input type="date" class="form-control" id="job_date" name="job_date[]" value="{{ $career->job_date }}" placeholder="تاريخ المباشرة" onkeyup="allnumeric(hourCount);">
      
    </div> 
</div>