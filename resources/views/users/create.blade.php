@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif




<form action="{{Route('users.store')}}" method="post">




@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
<input type="text" value="" name="name" class="form-control" style="background-color:#e6e6e6" required>

           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
<input type="email" value="" name="email" class="form-control" style="background-color:#e6e6e6" required>

           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
           
<input type="password" value="" name="password" class="form-control" style="background-color:#e6e6e6" required>
           
          
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
<input type="confirm-password" value="" name="confirm-password" class="form-control" style="background-color:#e6e6e6" required>
         
            {{-- {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
          
            <form method="POST" action="route('users.destroy',$user->id)" style="display: inline" > --}}
               
                <select class="form-control" name="roles" id="roles" multiple>
                    @foreach ($roles as $item)
                  
            
                    <option  value="{{$item}}">{{$item}}</option>
                     @endforeach
                  </select>


                {{-- <button type="submit" class="btn  btn-danger   " title='Delete'>حذف</button>
      
            </form> --}}
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>group:</strong>
            <select class="form-control" id="groupId" name="groupId" style="background-color:#e6e6e6" >
                <option disabled>اختر </option>
              @foreach ($userGroup as $item)
                  
            
                <option  value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach
             
              </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>


<p class="text-center text-primary"><small>MOID IT</small></p>
@endsection