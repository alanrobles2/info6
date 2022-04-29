@extends('layouts.master')

@section('content')

@include('fragments.validation-errors')
@include('fragments.sesion')

<form method="category" action="{{route("category.store")}}">
    @csrf
    @include('dashboard.category._form')

</form>

@endsection