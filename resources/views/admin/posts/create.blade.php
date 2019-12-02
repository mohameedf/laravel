@extends('layouts.admin')
@section('content')
    <h1>Create Posts </h1>
<div class="row">
    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title :') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
        {!! Form::label('category_id','Category :') !!}
        {!! Form::select('category_id',[''=>'Chose Categories']+$categories,null,['class'=>'form-control']) !!}
        {!! Form::label('photo_id','Photo :') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
        {!! Form::label('body','Body :') !!}
        {!! Form::textarea('body',null,['class'=>'form-control ','rows'=>4]) !!}
    </div>
    <div class="form-group ">
        {!! Form::submit('Create User',['class'=>' btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
    <div class="row">
    @include('includes.form_error')
    </div>
@stop