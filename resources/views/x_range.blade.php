@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <div style="margin-top: 15%">
                    <h3>Memory before usage</h3>
                    <p>{{$memory['before']}}</p>
                    <h3>Memory after x_range(0,1000000)</h3>
                    <p>{{$memory['after']}}</p>
                </div>
                <a href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
