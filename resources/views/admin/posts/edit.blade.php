@extends('layouts.admin')
@section('content')
    <h1>Edit Posts </h1>
    <div class="row">
        <div class="col-sm-5">
            <img src="{{$post->photo->file}}" class="img-responsive">
        </div>
        <div class="col-sm-7">
                {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('title','Title :') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                    {!! Form::label('category_id','Category :') !!}
                    {!! Form::select('category_id',[''=>'Uncategorized']+$categories,null,['class'=>'form-control']) !!}
                    {!! Form::label('photo_id','Photo :') !!}
                    {!! Form::file('photo_id',['class'=>'form-control']) !!}
                    {!! Form::label('body','Body :') !!}
                    {!! Form::textarea('body',null,['class'=>'form-control ','rows'=>4]) !!}
                </div>
                <div class="form-group ">
                    {!! Form::submit('Update User',['class'=>' btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" >@include('includes.form_error')</div>
                <div class="col-lg-3">
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
                    <div class="form-group ">
                        {!! Form::submit('Delete Post',['class'=>' btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
    </div>
    </div>
@stop