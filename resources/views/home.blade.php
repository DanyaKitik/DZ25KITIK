@extends('layout')

@section('content')
    <a href="{{route('range')}}" class="btn btn-primary" style="margin-top: 30%; float: left">RANGE MEMORY USAGE</a>
    <a href="{{route('x_range')}}" class="btn btn-primary" style="margin-top: 30%; float: right">XRANGE MEMORY USAGE</a>
@endsection
