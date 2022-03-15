@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
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


{{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!} --}}
<form action="{{route("roles.store")}}" method="post">
    @csrf
<div class="row" style="text-align: right">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>الاسم:</strong>
            {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>الصلاحيات:</strong>
            <br/>
            @foreach($permission as $i=> $value)
                {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/> --}}
        
            
            <label> <input type="checkbox" name="permission[]" value="{{$value->id}}" class="form-group"  >
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

<p class="text-center text-primary"><small>MOID IT</small></p>
@endsection