@extends('layouts.emp.emp')

@section('content')
<div class="row col-sm-12">
<div class="alert alert-dark" style="width:100%;text-align: center;padding: 20px; 0">
<strong>سجلات موظفين {{ $mainbranch }} </strong>
</div>
</div>
@if($lvl=='0')
<div class="row col-12" dir="rtl">
<!-- <div class="row col-sm-12" > -->
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr align="right">
            <th width="10%">اسم الموظف</th>
            <th>الكنية </th>
            <th>اسم الاب </th>
            <th>تاريخ التعيين</th>
            <th>الوضع الوظيفي</th>
          <th>المسمى الوظيفي</th>
            <th>مكان العمل الحالي</th>
          	<th>الفئة</th>
            <th width="15%" style="text-align:center">عدد السجلات&nbsp;:&nbsp;{{count($employees)}}</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
              
          
            <tr>
                <td align="right">{{ $item->fname }}</td>
                <td align="right" width="10%">{{ $item->lname }}</td>
                 <td align="right">{{ $item->fatherName }}</td>
                 <td  align="right"width="10%">{{ $item->posDate }}</td>
                 <td align="right">{{ $item->info_own }}</td>
            	<td align="right">{{ $item->posName }}</td>
                 <td align="right">{{ $item->posPlace }}</td>
            	<td align="right">{{ $item->degree }}</td>
                 <th style=“padding-left:20px;padding-right:20px;”><a href="/emp/details/{{ $item->id }}" class="btn btn-primary" style="vertical-align: middle;">&nbsp;&nbsp;&nbsp;تفاصيل&nbsp;&nbsp;&nbsp;</a> </th>
                 
                      
          </tr>
          @endforeach
        </tbody>
      </table>
    
        </div>
        <!-- <span class="color" -->
    
        <!-- </div> -->
        <div class="row col-sm-12 mb-3">
        <table class="table table-striped table-sm">
        <thead class="thead-dark" style="text-align:right;"><tr><th colspan='5'><h4><b>فرز البيانات</b></h4></th></tr></thead>
        <tbody><tr style="text-align:center;"><td width="7%">المؤسسة :</td>
        <td width="40%"><form action="/adsearch" method="post">
        <select name="subbranch" >
           @foreach($branches as $brs)
                <option value='{{ $brs->name }}'>
                  {{ $brs->name }}
                </option>
           @endforeach
        </select></td><td width="5%">الفئة :</td><td width="30%">
        <select name="emp-degree">
            <option value='0' selected>&nbsp;&nbsp; ----- كل الفئات ---- &nbsp;&nbsp;</option>
            <option value='1'>&nbsp;&nbsp;1&nbsp;&nbsp;</option>
            <option value='2'>&nbsp;&nbsp;2&nbsp;&nbsp;</option>
        	<option value='3'>&nbsp;&nbsp;3&nbsp;&nbsp;</option>
        	<option value='4'>&nbsp;&nbsp;4&nbsp;&nbsp;</option>
        	<option value='4'>&nbsp;&nbsp;5&nbsp;&nbsp;</option>
        </select></td>
        @csrf
        <!-- <div class="row col-sm-12 mt-3" > -->
        <td>
        <button class="btn btn-success" type="submit">&nbsp;&nbsp;&nbsp;فــــــــرز &nbsp;&nbsp;&nbsp;</button>
        <!-- </div> -->
        </form></td></tr></tbody></table>
        </div>
@else
<form action="course/create" method="post" dir="rtl">
    @csrf
        <div class="row col-12" dir="rtl">

	<!--<div class="row col-sm-12" > -->
    <h4><a href="/emp/add">اضافة موظف&nbsp;<i class="fa fa-user-plus" style="font-size:20px;color:#0000EE;"></i></a></h4>
  </form>
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr align="right">
            <th width="10%">اسم الموظف</th>
            <th>الكنية </th>
            <th>اسم الاب </th>
            <th>تاريخ التعيين</th>
         	<th>الوضع الوظيفي</th>
            <th>المسمى الوظيفي</th>
            <th>مكان العمل الحالي</th>
          	<th>الفئة</th>
            <th colspan="3" style="text-align:center">عدد السجلات&nbsp;:&nbsp;{{count($employees)}}</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
              
          
            <tr align="right">
                <td align="right">{{ $item->fname }}</td>
                <td width="10%">{{ $item->lname }}</td>
                 <td>{{ $item->fatherName }}</td>
                 <td>{{ $item->posDate }}</td>
            	<td>{{ $item->info_own }}</td>
            	<td>{{ $item->posName }}</td>
                 <td>{{ $item->posPlace }}</td>
           		 <td>{{ $item->degree }}</td>
                 <th width="6%" style=“padding-left:0px;padding-right:0px;”><a href="/emp/details/{{ $item->id }}" class="btn btn-primary" style="vertical-align: middle;">تفاصيل</a> </th>
                 <th width="6%" style=“padding-left:0px;padding-right:0px;”><a href="/emp/edit/{{ $item->id }}" class="btn btn-secondary" style="vertical-align: middle;">تعديل</a> </th>
                 <th width="6%" style=“padding-left:0px;padding-right:0px;”>
                  
                   <form action="/info/delete/{{ $item->id }}" method="post">
                    @method('DELETE')
                    @csrf
                  <button class="btn btn-danger" type="submit">حذف</button>
                  </form>
                   </th>
                      
          </tr>
          @endforeach
        </tbody>
      </table>
    
<!--         </div> -->
<!--       	 <span class="color" -->
    
        </div>
<!-- 		<div>
        <form action="/adsearch" method="post" dir="rtl">
        <select name="subbranch" >
           @foreach($branches as $brs)
                <option value='{{ $brs->name }}'>
                  {{ $brs->name }}
                </option>
           @endforeach
        </select>
        @csrf
        
        <button class="btn btn-success" type="submit">فرز حسب</button>
        
        </form>
        </div> -->

@endif
@endsection