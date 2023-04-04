@extends('sum.index')

@section('title', 'CALCULATOR')

@section('main')

    <form action="{{route('do-calc')}}" method="post">

    <h1>
        <input type="text" name="x"> + <input type="text" name="y">
    </h1>

    <button type="submit">CALC</button>

    </form>


@endsection