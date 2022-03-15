@extends('layouts.emp.emp')

@section('content')
<div id="main" class="row col-sm-12">
<form action="course/create" method="get" dir="rtl">
    @csrf
        <div class="row col-12" dir="rtl">
    <!-- ----------------------------------------------------->
  </form>

    <table class="table">
        <tr>
          <td style="width:50%;">
            <img src="{{ asset('img/user-small.png') }}" align="left">
          </td>
          <td style="width:50%; text-align:right; vertical-align:middle;">
             <h4>{{ $info->fname }} {{ $info->lname }}</h4>
          </td>
        </tr>
      </table>

    <!-- <div class="row col-sm-12 mb-3" align="right"> -->
    <table class="table table-striped table-sm table-bordered mb-3" style="text-align:right;">
    <thead class="thead-dark" style='text-align:center;'><tr><th colspan='4' align='center'> <h4><b>المعلومات الشخصية </b></h4></th></tr></thead>
    <tbody>
    <tr><td><b>الاسم</td><td>{{ $info->fname }}</td>
    <td><b>الكنية</td><td>{{ $info->lname }}</td></tr>
    <tr><td><b>اسم الاب</td><td>{{ $info->fatherName }}</td>
    <td><b>اسم الام</td><td>{{ $info->motherName }}</td></tr>
    <tr><td><b>تاريخ الميلاد</td><td>{{ $info->birthDate }}</td>
    <td><b>مكان الولادة</td><td>{{ $info->birthPlace }}</td></tr>
    <tr><td><b>الرقم الوطني</td><td>{{ $info->nationalNb }}</td>
    <td><b> العنوان الحالي</td><td>{{ $info->address }}</td></tr>
    <tr><td><b>ايميل</td><td>{{ $info->email }}</td>
    <td><b>موبايل</td><td>{{ $info->mobile }}</td></tr>
    <tr><td><b>عدد الاولاد</td><td>{{ $info->childNb }}</td>
    <td><b>الحالة الاجتماعية</td><td>{{ $info->isMarid }}</td></tr>
    <tr><td><b>الجنس</td><td>{{ $info->sex }}</td>
    <td><b>الخدمة العسكرية</td><td>{{ $info->mitlary }}</td></tr>
    <tr><td><b> تاريخ التعيين</td><td>{{ $info->posDate }}</td>
    <td><b>العلاقة الوظيفية</td><td>{{ $info->posStatus }}</td></tr>
    <tr><td><b>صك اشغال مركز العمل </td><td>{{ $info->doc }}</td>
    <td><b>رقم الصك </td><td>{{ $info->docNb }}</td></tr>
    <tr><td><b> تاريخ الصك</td><td>{{ $info->docDate }}</td>
    <td><b>الجهة الفرعية</td><td>{{ $info->posPlace }}</td></tr>
    <tr><td><b>الوضع الوظيفي</td><td>{{ $info->info_own }}</td>
    <td><b>عامل بموجب</td><td>{{ $info->info_apply }}</td></tr>
    <tr><td><b>اللغة انكليزية</td><td>{{ $info->lang1 }}</td>
    <td><b>درجة الاتقان</td><td>{{ $info->levelLang1 }}</td></tr>
    <tr><td><b>2اللغة</td><td>{{ $info->lang2 }}</td>
    <td><b>درجة الاتقان</td><td>{{ $info->levelLang2 }}</td></tr>
    <tr><td><b>الفئة</td><td>{{ $info->degree }}</td>
    <td><b>عدد سنين الخدمة</td><td>{{ $info->serviceYearNb }}</td></tr>
    <tr><td rowspan='2'><b>الاعمال التي مارسها سابقا</td><td colspan='3' rowspan='2'>{{ $info->exPos }}</td></tr>
    </tbody>
    </table>
    <!-- </div> -->

    
@if($lvl==0)

    <div class="row col-sm-12 mt-3" >
      <h4><b>الشهادات</b></h4>
    </div>
    <table class="table table-striped mb-4">
        <thead class="thead-dark">
          <tr align="right">
            <th>المؤهل العلمي </th>
            <th>تاريخ الشهادة </th>
            <th> الاختصاص الدقيق </th>
            <th> الجامعة</th>
            <th> آخر شهادة حصل عليها </th>
            <th> تاريخ آخر شهادة  </th>

           

          </tr>
        </thead>
        <tbody>
          @foreach ($certificate as $item)
              
          
            <tr align="right">
                <td align="right">{{ $item->scienceDegree }}</td>
                <td>{{ $item->getDate }}</td>
                 <td>{{ $item->sptial }}</td>
                 <td>{{ $item->univercity }}</td>
                 <td>{{ $item->lastCert }}</td>
                 <td>{{ $item->lastCertDate }}</td>
                 
                      
          </tr>
          @endforeach
          
            @if($certificate->isEmpty())
            <tr>
            <td colspan='7'>
            <div class="row col-sm-12 mt-2">
              <h6>لا يوجد </h6>
            </div>
            </td>
            </tr>
            @endif
            
        </tbody>
      </table>
    
        <!-- ----------------------------------------------------->
    
   
    <div class="row col-sm-12" >
      <h4><b>الدورات</b></h4>
    </div>
<table class="table table-striped mb-4">
    <thead class="thead-dark">
      <tr align="right">
        <th>اسم الدورة </th>
        <th>مدة الدورة </th>
        <th> مكان الدورة </th>
        <th> نوع الدورة</th>
        <th>علاقة الدورة بالعمل </th>
      	<th>تاريخ الحصول عليها  </th>
        <th>حكومي / خاص </th>
        

      </tr>
    </thead>
    <tbody>
      @foreach ($course as $cours)
          <tr align="right">
            <td align="right">{{ $cours->name }}</td>
            <td>{{ $cours->duration }}&nbsp;&nbsp;&nbsp;يوم</td>
             <td>{{ $cours->place }}</td>
             <td>{{ $cours->kind }}</td>
             <td>{{ $cours->relation }}</td>
          	<td>{{ $cours->date }}</td>
          	<td>{{ $cours->gov }}</td>
          
      </tr>
      @endforeach
   	  @if($course->isEmpty())
      <tr>
      <td colspan='7'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      </td>
      </tr>
      @endif
    </tbody>
    
  </table>
  
  <!-- ----------------------------------------------------->
    
    
   
 
  <div class="row col-sm-12" >
      <h4><b>ايفاد</b></h4>
    </div>

<table class="table table-striped mb-4">
  <thead class="thead-dark">
    <tr align="right">
      <th>نوع الايفاد </th>
      <th>سبب الايفاد</th>
      <th>تاريخ الايفاد</th>
      <th> صك الايفاد</th>
      <th> علاقة الايفاد بالعمل الوظيفي المكلف به </th>
     
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($studyTravel as $study)
        
    
      <tr align="right">
          
          <td>{{ $study->kind }}</td>
           <td>{{ $study->reson }}</td>
           <td>{{ $study->theDate }}</td>
           <td>{{ $study->doc }}</td>
           <td>{{ $study->relation }}</td>
          
                
    </tr>
    @endforeach
    @if($studyTravel->isEmpty())
    <tr>
      <td colspan='7'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      </td>
      </tr>
  	 @endif
  </tbody>
</table>
  <!-- ----------------------------------------------------->
    
    
 
 
  <div class="row col-sm-12" >
      <h4><b>العقوبات</b></h4>
    </div>

<table class="table table-striped mb-4">
  <thead class="thead-dark">
    <tr align="right">
        <th> نوع العقوبة </th>
        <th>صك العقوبة </th>
      <th>تاريخ العقوبة</th>
      <th> سبب العقوبة</th>
      <th> مدة العقوبة </th>
    
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($punish as $pun)
        
    
      <tr align="right">
        <td>{{ $pun->kind }}</td>

        <td align="right">{{ $pun->doc }}</td>
          <td>{{ $pun->theDate }}</td>
           <td>{{ $pun->reson }}</td>
           <td>{{ $pun->duration }}</td>
         
                
    </tr>
    @endforeach
   	@if($punish->isEmpty()) 
   	<tr>
      <td colspan='7'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      </td>
      </tr>
  	@endif
  </tbody>
</table>

 
 
  <div class="row col-sm-12" >
      <h4><b>الخبرات السابقة</b></h4>
    </div>

<table class="table table-striped mb-4">
  <thead class="thead-dark">
    <tr align="right">
        <th> الخبرات السابقة التي يمتللكها  </th>
       
    
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($exExpert as $expert)
        
    
      <tr align="right">
        <td>{{ $expert->title }}</td>

         
           
                
    </tr>
    @endforeach
  	@if($exExpert->isEmpty())  
  	<tr>
      <td colspan='7'>
      
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      </td>
      </tr>
  	@endif
  </tbody>
</table>

  <div class="row col-sm-12" >
        <h4><b>المسار الوظيفي</b></h4>
      </div>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr align="right">
        <th> الجهة العامة</th>
        <th>الوحدة التنظيمية </th>
        <th>المسار الوظيفي</th>
        <th> الحالة الوظيفية</th>
        <th> الفئة </th>
        <th> تاريخ المباشرة</th>
        <th> </th>
        <th> </th>

      </tr>
    </thead>
    <tbody>
    @foreach ($career as $cr)
    <tr align="right">
        <td>{{ $cr->main_dep }}</td>
        <td>{{ $cr->cur_dep }}</td>
        <td>{{ $cr->job_title }}</td>
        <td>{{ $cr->job_rel }}</td>
        <td>{{ $cr->job_lvl }}</td>
        <td>{{ $cr->job_date }}</td>
          
                  
      </tr>
      @endforeach
      @if($career->isEmpty()) 
      <tr>
        <td colspan='8'>
        <div class="row col-sm-12 mt-2">
          <h6>لا يوجد </h6>
        </div>
        </td>
        </tr>
      @endif
    </tbody>
  </table>

        </div>
        <span class="color"

        </div>
</form>
@else
<div class="row col-sm-12 mt-2" >
    <h5><a href="/certificate/create/{{ $info->id }}"><i class="fa fa-graduation-cap" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة شهادة</b></a></h5>
        </div>
    <table class="table table-striped mb-5">
        <thead class="thead-dark">
          <tr align="right">
            <th>المؤهل العلمي </th>
            <th>تاريخ الشهادة </th>
            <th> الاختصاص الدقيق </th>
            <th> الجامعة</th>
            <th> آخر شهادة حصل عليها </th>
            <th> تاريخ آخر شهادة  </th>
            <th> </th>
            <th> </th>

          </tr>
        </thead>
        <tbody>
          @foreach ($certificate as $item)
              
          
            <tr align="right">
                <td align="right">{{ $item->scienceDegree }}</td>
                <td>{{ $item->getDate }}</td>
                 <td>{{ $item->sptial }}</td>
                 <td>{{ $item->univercity }}</td>
                 <td>{{ $item->lastCert }}</td>
                 <td>{{ $item->lastCertDate }}</td>
                 <th style="width:6%;"><a href="/certificate/{{ $info->id }}/edit/{{ $item->id }}" class="btn btn-secondary">تعديل</a> </th>
                 <th style="width:6%;">
                  <form action="/certificate/{{ $info->id }}/delete/{{ $item->id }}" method="post">
                  @method('DELETE')
                  @csrf
                <button class="btn btn-danger" type="submit">حذف</button>
                </form>
                </th>
                      
          </tr>
          @endforeach
          @if($certificate->isEmpty())
   		   <tr>
      		<td colspan='8'>
      		<div class="row col-sm-12 mt-2">
        	<h6>لا يوجد </h6>
      		</div>
      		</td>
      		</tr>
      		@endif
        </tbody>
      </table>
    
        <!-- ----------------------------------------------------->
    
   
<h5><a href="/course/create/{{ $info->id }}"><i class="fa fa-book" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة دورة</b></a></h5>
<table class="table table-striped mb-5">
    <thead class="thead-dark">
      <tr align="right">
        <th>اسم الدورة </th>
        <th>مدة الدورة </th>
        <th> مكان الدورة </th>
        <th> نوع الدورة</th>
        <th>علاقة الدورة بالعمل </th>
      	<th>تاريخ الحصول عليها  </th>
        <th>حكومي / خاص </th>
        <th> </th><th> </th>

      </tr>
    </thead>
    <tbody>
      @foreach ($course as $cours)
          <tr align="right">
            <td align="right">{{ $cours->name }}</td>
            <td>{{ $cours->duration }}&nbsp;&nbsp;&nbsp;يوم</td>
             <td>{{ $cours->place }}</td>
             <td>{{ $cours->kind }}</td>
             <td>{{ $cours->relation }}</td>
          	<td>{{ $cours->date }}</td>
          	<td>{{ $cours->gov }}</td>
           
             <th style="width:6%;"><a href="/course/{{ $info->id }}/edit/{{ $cours->id }}" class="btn btn-secondary">تعديل</a> </th>
             <th style="width:6%;">
              <form action="/course/{{ $info->id }}/delete/{{ $cours->id }}" method="post">
              @method('DELETE')
              @csrf
            <button class="btn btn-danger" type="submit">حذف</button>
            </form>
            </th>
                  
      </tr>
      @endforeach
      @if($course->isEmpty())
      <tr>
      <td colspan='9'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      </td>
      </tr>
      @endif
    </tbody>
    
  </table>
  
  <!-- ----------------------------------------------------->
    
    
   
 
<h5><a href="/studyOut/create/{{ $info->id }}"><i class="fa fa-address-book" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة ايفاد</b></a></h5>

<table class="table table-striped mb-5">
  <thead class="thead-dark">
    <tr align="right">
      <th>نوع الايفاد </th>
      <th>سبب الايفاد</th>
      <th>تاريخ الايفاد</th>
      <th> صك الايفاد</th>
      <th> علاقة الايفاد بالعمل الوظيفي المكلف به </th>
     
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($studyTravel as $study)
        
    
      <tr align="right">
          
          <td>{{ $study->kind }}</td>
           <td>{{ $study->reson }}</td>
           <td>{{ $study->theDate }}</td>
           <td>{{ $study->doc }}</td>
           <td>{{ $study->relation }}</td>
          
           <th style="width:6%;"><a href="/studyOut/{{ $info->id }}/edit/{{ $study->id }}" class="btn btn-secondary">تعديل</a> </th>
           <th style="width:6%;">
            <form action="/studyOut/{{ $info->id }}/delete/{{ $study->id }}" method="post">
            @method('DELETE')
            @csrf
          <button class="btn btn-danger" type="submit">حذف</button>
          </form>
          </th>
                
    </tr>
    @endforeach
  	@if($studyTravel->isEmpty())  
  	<tr>
      <td colspan='7'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>  
      </td>
      </tr>
  	@endif
  </tbody>
</table>
  <!-- ----------------------------------------------------->
    
    
 
 
<h5><a href="/punish/create/{{ $info->id }}"><i class="fa fa-user-secret" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة عقوبة</b></a></h5>

<table class="table table-striped mb-5">
  <thead class="thead-dark">
    <tr align="right">
        <th> نوع العقوبة </th>
        <th>صك العقوبة </th>
      <th>تاريخ العقوبة</th>
      <th> سبب العقوبة</th>
      <th> مدة العقوبة </th>
    
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($punish as $pun)
        
    
      <tr align="right">
        <td>{{ $pun->kind }}</td>

        <td align="right">{{ $pun->doc }}</td>
          <td>{{ $pun->theDate }}</td>
           <td>{{ $pun->reson }}</td>
           <td>{{ $pun->duration }}</td>
         
           <th style="width:6%;"><a href="/punish/{{ $info->id }}/edit/{{ $pun->id }}" class="btn btn-secondary">تعديل</a> </th>
           <th style="width:6%;">
              <form action="/punish/{{ $info->id }}/delete/{{ $pun->id }}" method="post">
              @method('DELETE')
              @csrf
            <button class="btn btn-danger" type="submit">حذف</button>
            </form>
            </th>
                
    </tr>
    @endforeach
    @if($punish->isEmpty())
  	<tr>
      <td colspan='7'>
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>  
      </td>
      </tr>
  	@endif
  </tbody>
</table>
 <!-- ----- -->
 <h5><a href="/exExpert/create/{{ $info->id }}"><i class="fa fa-copy" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة خبرة سابقة</b></a></h5>

<table class="table table-striped mb-5">
  <thead class="thead-dark">
    <tr align="right">
        <th> الخبرات السابقة التي يمتللكها  </th>
       
    
      <th> </th>
      <th> </th>

    </tr>
  </thead>
  <tbody>
    @foreach ($exExpert as $expert)
        
    
      <tr align="right">
        <td>{{ $expert->title }}</td>

         
           <th style="width:6%;"><a href="/exExpert/{{ $info->id }}/edit/{{ $expert->id }}" class="btn btn-secondary">تعديل</a> </th>
           <th style="width:6%;">
              <form action="/exExpert/{{ $info->id }}/delete/{{ $expert->id }}" method="post">
              @method('DELETE')
              @csrf
            <button class="btn btn-danger" type="submit">حذف</button>
            </form>
            </th>
                
    </tr>
    @endforeach
    <tr>
      <td colspan='7'>
      @if($exExpert->isEmpty())
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>
      @endif
      </td>
      </tr>
  </tbody>
</table>
 
<!-- ------ -->
<h5><a href="/career/create/{{ $info->id }}"><i class="fa fa-copy" style="font-size:20px;color:#0073e6;"></i>&nbsp;<b>اضافة بند للمسار الوظيفي</b></a></h5>

<table class="table table-striped mb-5">
  <thead class="thead-dark">
  <tr align="right">
        <th> الجهة العامة</th>
        <th>الوحدة التنظيمية </th>
        <th>المسار الوظيفي</th>
        <th> الحالة الوظيفية</th>
        <th> الفئة </th>
        <th> تاريخ المباشرة</th>
        <th> </th>
        <th> </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($career as $cr)
    <tr align="right">
        <td>{{ $cr->main_dep }}</td>
        <td>{{ $cr->cur_dep }}</td>
        <td>{{ $cr->job_title }}</td>
        <td>{{ $cr->job_rel }}</td>
        <td>{{ $cr->job_lvl }}</td>
        <td>{{ $cr->job_date }}</td>

         
           <th style="width:6%;"><a href="/career/{{ $info->id }}/edit/{{ $cr->id }}" class="btn btn-secondary">تعديل</a> </th>
           <th style="width:6%;">
              <form action="/career/{{ $info->id }}/delete/{{ $cr->id }}" method="post">
              @method('DELETE')
              @csrf
            <button class="btn btn-danger" type="submit">حذف</button>
            </form>
            </th>
                
    </tr>
    @endforeach
  	@if($career->isEmpty())  
  	<tr>
      <td colspan='8'>  
      <div class="row col-sm-12 mt-2">
        <h6>لا يوجد </h6>
      </div>  
      </td>
      </tr>
  	@endif
  </tbody>
</table>

<!-- ------ -->
        </div>
        <span class="color"

        </div>
</form>
@endif

</div>
@endsection