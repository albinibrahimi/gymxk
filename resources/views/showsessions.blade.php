@extends('app')

@section('content')

    <table class="table table-bordered">
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($sessions as $session)
       <tr>
            <td><a class="btn btn-info" href="{{ route('showsession',$session->date) }}">{{$session->date}}</a></td>
       </tr>
       @endforeach
    </table>

@endsection