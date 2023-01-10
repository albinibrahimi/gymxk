@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('create')}}">Shto muskulin</a>
                <a class="btn btn-success" href="{{url('createpart')}}">Shto pjesen</a>
                <a class="btn btn-success" href="{{url('showsessions')}}">Sesionet</a>
            </div>
        </div>
    </div>

@endsection