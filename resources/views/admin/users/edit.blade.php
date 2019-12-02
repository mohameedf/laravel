@extends('layouts.admin')


@section('content')

    <h1>Update User </h1>
    <div class="row">
        <div class="col-sm-3">
            <img class="img-rounded img-responsive" src="{{$user->photo ? $user->photo->file: 'http://placehold.it/400/400'}}">
        </div>
        <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
            {!! Form::label('photo_id','Photo :') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            {!! Form::label('password','password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group ">
            {!! Form::submit('Update User',['class'=>' btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6" >@include('includes.form_error')</div>
        <div class="col-lg-3">
            {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
            <div class="form-group ">
                {!! Form::submit('Delete User',['class'=>' btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop
