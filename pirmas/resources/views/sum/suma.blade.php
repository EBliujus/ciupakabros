@extends('sum.index')

@section('title', 'SUMATORIUS')

@section('main')
    
@if($rez > 100)

<h1 style="color:darkgreen; display:grid; place-items:center;">

@else

<h1 style="color:darkblue; display:grid; place-items:center;">

@endif

Suma yra lygi: {{$rez}}
</h1>

@endsection