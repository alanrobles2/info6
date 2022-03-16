@extends('layouts.master')

@section('content')
<form action="{{route('post.store')}}" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Url Limpia</label>
      <input type="text" class="form-control" name="url_clean" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contenido</label>
        <textarea class="form-control" name="content" id="content" ></textarea>
      </div>
    <button type="submit" value="Enviar" class="btn btn-primary">Submit</button>
  </form>
@endsection