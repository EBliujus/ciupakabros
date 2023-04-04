@extends('sum.index')

@section('title', 'Hello')

@section('main')

@include('nav')
    
<h1 style="color:{{$color}}; display:grid; place-items:center;">LABAS {{$animal}}</h1>

@endsection