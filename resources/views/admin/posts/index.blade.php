@extends('layouts.admin')
@section('content')
    <h1> Posts </h1>

    <table class="table table-striped">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>name</th>
              <th>Category</th>
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
                      <td><img height="50" src="{{$post->photo ? $post->photo->file :  'http://placehold.it/50/50'}}"></td>
                      <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                      <td>{{$post->category? $post->category->name :'Uncategorized' }}</td>
                      <td>{{$post->title}}</td>
                      <td>{{str_limit($post->body,7) }}</td>
                      <td>{{$post->created_at->diffForhumans()}}</td>
                      <td>{{$post->updated_at->diffForhumans()}}</td>
                      </tr>
                  @endforeach

        @endif
      </table>
    @stop