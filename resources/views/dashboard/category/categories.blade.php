@extends('layouts.master')

@section('content')
<h1>Category</h1>

<a href="{{ route('category.create')}}" class="btn btn-success">Create</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach ($categories as $category)
      <tr>
      <th scope="row">{{$category->id}}</th>
        <td>{{$category->title}}</td>
        <td>{{$category->url_clean}}</td>


      </tr>  

      
    @endforeach
    

  </tbody>
</table>

@endsection