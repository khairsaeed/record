@if ($errors->any())
<div class="alert alert-danger">
    <strong>عذرا!</strong> يوجد خطأ في بيانات الادخال<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@csrf
<h4 style="text-align: right;margin-bottom: 15px;"><b>اضافة مواد أولية  خاصة بالمنتج الصناعي  :</b></h4>
<!-- <div class="alert alert-info" role="alert" style="text-align:center;">المعلومات الشخصية</div> -->
<div class="row col-12" style="float: right;">
<input type="text" value="{{ session()->get('product') }}" name="recordId" class="form-control" style="background-color:#e6e6e6" hidden>

<div class="col-sm-6 nopadding" style="float: right;" >
<label for="name" style="float: right;"><strong dir="rtl">الاسم القياسي</strong></label>
<input type="text" value="{{ $primeryMaterial->name }}" name="name" class="form-control" style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6 nopadding">
<label for="describe" style="float: right;"><strong>الوصف</strong></label>
<input type="text" value="{{ old('describe')??  $primeryMaterial->describe }}" name="describe" class="form-control"  style="background-color:#e6e6e6" required>
</div>
<div class="col-sm-6">
<label for="code" style="float: right;"><strong>ترميز المنتج</strong></label>
<input type="text" value="{{ old('code') ??  $primeryMaterial->code  }}" name="code" class="form-control"  style="background-color:#e6e6e6" required>
</div>

<div class="col-sm-6" style="float: right;">
    <label for="public_name" style="float: right;"><strong>الاسم السلعي  </strong></label>
    <input type="text" value="{{  $primeryMaterial->public_name  }}" name="public_name" class="form-control" style="background-color:#e6e6e6" >
    </div>

    <div class="col-sm-6" style="float: right;">
        <label for="trading_flag" style="float: right;"><strong>العلامة التجارية   </strong></label>
        <input type="text" value="{{  $primeryMaterial->trading_flag  }}" name="trading_flag" class="form-control" style="background-color:#e6e6e6" >
        </div>
    

<div class="col-sm-6" style="float: right;">
<label for="ammount" style="float: right;"><strong>الطاقة الإنتاجية سنوياً  </strong></label>
<input type="number" value="{{  $primeryMaterial->ammount  }}" name="ammount" class="form-control" style="background-color:#e6e6e6" >
</div>

<div class="col-sm-6" style="float: right;">
    <label for="unit" style="float: right;"><strong>الواحدة    </strong></label>
    <input type="text" value="{{  $primeryMaterial->unit  }}" name="unit" class="form-control" style="background-color:#e6e6e6" >
    </div>

    <div class="col-sm-6" style="float: right;">
        <label for="note" style="float: right;"><strong>  ملاحظات  </strong></label>
        <input type="text" value="{{  $primeryMaterial->note  }}" name="note" class="form-control" style="background-color:#e6e6e6" >
        </div>
