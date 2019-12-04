@extends('layouts.admin')



@section('content')
    <h1> Categories </h1>
<div class="row">
    <div class="col-sm-6">
        <div class="row">
            {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
            <div class="form-group">
                {!! Form::label('name','Name :') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group ">
                {!! Form::submit('Create Category',['class'=>' btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
            <div class="form-group ">
                {!! Form::submit('Update Category',['class'=>' btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
            </div>
        </div>
</div>

    <div class="col-sm-6">
        <div class="row">

        </div>

    </div>

@stop