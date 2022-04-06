@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="post" action="{{route("post.update", $post->id)}}">
    @csrf 
    @method("PUT")
    @include('dashboard.post._form')

</form>

@endsection