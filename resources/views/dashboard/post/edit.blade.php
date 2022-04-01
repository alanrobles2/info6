@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="post" action="{{route("post.update")}}">
    @csrf
    @include('dashboard.post._form')

</form>

@endsection