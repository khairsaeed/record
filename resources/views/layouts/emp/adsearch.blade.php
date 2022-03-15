@extends('layouts.emp.emp')

@section('content')
	@if($employees->isEmpty())
    <div style="width:100%;text-align:center;">
    <h3>لا توجد نتائج</h3>
    <div>
    @else

    @if($lvl==0)
    <!--<div class="row col-sm-12">-->
	<div class="alert alert-dark" style="width:100%;text-align: center;padding: 20px; 0">
    @if($deg==0)
	<strong>سجلات موظفين {{ $subname }} ( كل الفئات  ) </strong>
    @else
    <strong>سجلات موظفين {{ $subname }} (الفئة {{ $deg }} ) </strong>
    @endif
	</div>
	<!--</div>-->
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr align="right">
            <th>اسم الموظف</th>
            <th>الكنية </th>
            <th>اسم الاب </th>
            <th>تاريخ التعيين</th>
            <th>العلاقة الوظيفية</th>
            <th>مكان العمل الحالي</th>
            <th>الفئة</th>
            <th> </th><th colspan="2">عدد السجلات&nbsp;:&nbsp;{{count($employees)}}</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
              
          
            <tr>
                <td align="right">{{ $item->fname }}</td>
                <td align="right">{{ $item->lname }}</td>
                 <td align="right">{{ $item->fatherName }}</td>
                 <td align="right">{{ $item->posDate }}</td>
                 <td align="right">{{ $item->posStatus }}</td>
                 <td align="right">{{ $item->posPlace }}</td>
                 <td align="right">{{ $item->degree }}</td>
                 <th colspan="3"><a href="/emp/details/{{ $item->id }}" class="btn btn-primary" style="vertical-align: middle;">&nbsp;&nbsp;&nbsp;تفاصيل&nbsp;&nbsp;&nbsp;</a> </th>
                      
          </tr>
          @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-dark" style="width:100%;text-align: center;padding: 20px; 0">
	<strong>سجلات موظفين {{ $sub }} </strong>
	</div>
	<!--</div>-->
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr align="right">
            <th>اسم الموظف</th>
            <th>الكنية </th>
            <th>اسم الاب </th>
            <th>تاريخ التعيين</th>
            <th>الوضع الوظيفي</th>
            <th>مكان العمل الحالي</th>
            <th> </th><th colspan="2">عدد السجلات&nbsp;:&nbsp;{{count($employees)}}</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
              
          
            <tr align="right">
                <td align="right">{{ $item->fname }}</td>
                <td>{{ $item->lname }}</td>
                 <td>{{ $item->fatherName }}</td>
                 <td>{{ $item->posDate }}</td>
                 <td>{{ $item->posStatus }}</td>
                 <td>{{ $item->posPlace }}</td>
                 <th width="6%"><a href="/emp/details/{{ $item->id }}" class="btn btn-primary" style="vertical-align: middle;">تفاصيل</a> </th>
                 <th width="6%"><a href="/emp/edit/{{ $item->id }}" class="btn btn-secondary" style="vertical-align: middle;">تعديل</a> </th>
                 <th width="6%">
                  
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
    @endif
    @endif

@endsection