@extends('app')

@section('content')

                <h2 class="text-center">Zgjedh muskulin</h2>
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