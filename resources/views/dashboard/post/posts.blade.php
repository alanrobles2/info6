@extends('layouts.master')

@section('content')
<h1>Post</h1>

<a href="{{ route('post.create')}}" class="btn btn-success">Create</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col" colspan="2">Options</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach ($posts as $post)
      <tr>
      <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->url_clean}}</td>
        <td>
          <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
          <a href="" class="btn btn-danger">Delete</a>
        </td>

      </tr>  
    @endforeach
    

  </tbody>
</table>


  

@endsection