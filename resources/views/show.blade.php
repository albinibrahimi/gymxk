@extends('app')
  
@section('content')

                <h2 class="text-center">Zgjedh muskulin</h2>

    <div class="row">
  @foreach ($parts as $part)
    <div class="col-6 mt-5 justify-content-center d-flex">
        <div class="muscle-data text-center pt-4 pb-3" style="width: fit-content;">
    <a href="{{ route('addsession',$part->id) }}"><img src="/images/{{$part->image}}" width="200px"><h5>{{$part->name}}</h5></a>

    </div>
    </div>
    @endforeach
  </div>
@endsection