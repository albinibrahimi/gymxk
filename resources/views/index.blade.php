@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Muskujt</h1>
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
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Emri</th>
            <th>Selekto</th>
        </tr>
        @foreach ($muscles as $muscle)
       <tr>
            <td>{{$muscle->id}}
            <td><img src="/images/{{$muscle->image}}" width="100px"></td>
            <td>{{$muscle->name}}</td>
            <td> <a class="btn btn-info" href="{{ route('show',$muscle->id) }}">Show</a></td>
       </tr>
       @endforeach
    </table>

@endsection