@extends('app')

@section('content')

    <table class="table table-bordered">
    <tr>
            <th>Sesionet</th>
        </tr>
        @forelse ($sessions as $session)

        <tr>
            <td><a class="btn btn-info" href="{{ route('showsession',$session->date) }}">{{$session->date}}</a></td>
       </tr>        
       @empty
       <tr>
            <td class="bg-danger text-white p-1">Ske ushtru kurr!</td>
       </tr>
       
       @endforelse
    </table>

@endsection