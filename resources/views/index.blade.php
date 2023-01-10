@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Zgjedh muskulin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('create')}}">Shto muskulin</a>
                <a class="btn btn-success" href="{{url('createpart')}}">Shto pjesen</a>
                <a class="btn btn-success" href="{{url('showsessions')}}">Sesionet</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  <div class="row">
  @foreach ($muscles as $muscle)
    <div class="col-6 mt-3 justify-content-center d-flex">
        <div class="muscle-data text-center pt-4 pb-3" style="width: fit-content;">
    <a href="{{ route('show',$muscle->id) }}">
        <img src="/images/{{$muscle->image}}" width="200px">
        <h5 class="mt-2">{{$muscle->name}}</h5>
    </a>
    </div>
    </div>
    @endforeach
  </div>
@endsection