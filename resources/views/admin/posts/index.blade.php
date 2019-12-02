@extends('layouts.admin')
@section('content')
    <h1> Posts </h1>

    <table class="table table-striped">
        <thead>
          <tr>
              <th>Id</th>
              <th>name</th>
              <th>Category</th>
              <th>Photo</th>
              <th>title</th>
              <th>body</th>
              <th>Created at</th>
              <th>updated at</th>
          </tr>
        </thead>
        <tbody>

              @if($posts)
                  @foreach($posts as $post)
                      <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->user->name}}</td>
                      <td>{{$post->category? $post->category->name :'Uncategorized' }}</td>
                      <td><img height="50" src="{{$post->photo ? $post->photo->file :  'http://placehold.it/50/50'}}"></td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->body}}</td>
                      <td>{{$post->created_at->diffForhumans()}}</td>
                      <td>{{$post->updated_at->diffForhumans()}}</td>
                      </tr>
                  @endforeach

        @endif
      </table>
    @stop