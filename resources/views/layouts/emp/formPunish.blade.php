@csrf
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

  <input type="text" class="form-control" id="kind" name="kind[]" value="{{ $punish->kind }}" placeholder="نوع العقوبة" required>

</div>
<div class="col-sm-2 ">
  <input type="text" class="form-control" id="reson" name="reson[]" value="{{ $punish->reson }}" placeholder="سبب العقوبة">
</div>
<div class="col-sm-2">

  <input type="date" class="form-control" id="theDate" name="theDate[]" value="{{ $punish->theDate }}" placeholder="تاريخ العقوبة">

</div>
<div class="col-sm-2 nopadding">

  <input type="text" class="form-control" id="doc" name="doc[]" value="{{ $punish-> doc}}" placeholder="صك العقوبة ">

</div>
<div class="col-sm-3 nopadding">

  <input type="text" class="form-control" id="duration" name="duration[]" value="{{ $punish->duration }}" placeholder="مدة العقوبة"  onkeyup="allnumeric(duration);">

</div>


