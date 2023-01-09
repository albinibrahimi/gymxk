@extends('app')

@section('content')

    <table class="table table-bordered">
        <tr>
        <h5 class="text-center">Ushtrimet e datës: {{ request()->date }}</h1>
        </tr>
        <tr>
            <th>Weight</th>
            <th>Reps</th>
            <th>Exercise</th>
            <td>Image</td>
        </tr>
        @foreach ($session as $session)
       <tr>
            <td>{{$session->weight}}</td>
            <td>{{$session->reps}}</td>
            <td>{{$session->name}}</td>
            <td><img src="/images/{{$session->image}}" width="100px"></td>
       </tr>
       @endforeach
    </table>

@endsection