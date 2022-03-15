@extends('layouts2.main')





@section('content')
   

 
    <div class="content-header navbar-dark bg-dark">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
         <div class="row">  
            <div class="col-6">
              <h1> ادارة المستخدمين </h1>

             </div>
            
          </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item active"></li>
              {{-- <li class="breadcrumb-item active">Top Navigation</li>--}}
            
              <li class="breadcrumb-item"><a href="{{Route('factories')}}">عرض المنشآت</a></li>
             
             
              <li class="breadcrumb-item">   ادارة المستخدمين</li> 
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div style="text-align: right">
          <br>  <a class="btn btn-success pull-right" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> --}}
        {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!} --}}

        

        <form method="POST" action="{{route('users.destroy',$user->id)}}" style="display: inline" >
         @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button type="submit" class="btn  btn-danger   " title='Delete'>حذف</button>

      </form>
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}


<p class="text-center text-primary"><small>MOID IT</small></p>
@endsection