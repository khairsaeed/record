@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="text-align: right">
        <div class="pull-right">
            <h2>Edit Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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
<form action="{{route("roles.update",$role->id)}}" method="post">
@method("PATCH")
@csrf
{{-- {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!} --}}
<div class="row" style="text-align: right">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group pull-right">
            <strong>Name:</strong>
            {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
            <input type="text" name="name"class="form-control" value="  {{$role->name}}">
     
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
            {{-- <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }} --}}
                {{-- <label>{{ Form::checkbox('permission[]', , in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }} --}}
             <label> <input type="checkbox" name="permission[]" value="{{$value->id}}" class="form-group" {{in_array($value->id, $rolePermissions) ? 'checked' : ''}} >
                    {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{-- {!! Form::close() !!} --}}
</form>

@endsection