@extends('app')

@section('content')


    <table class="table table-striped table-dark text-center align-middle">
  <thead>
    <tr>
      <th scope="col">Sesionet</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($sessions as $session)
    <tr>
      <td><a class="btn btn-danger" href="{{ route('showsession',$session->date) }}">{{$session->date}}</a></td>
    </tr>
    @empty
       <tr>
            <td>Ske ushtru kurr!</td>
       </tr>
       @endforelse
  </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$sessions->links()}}
</div>
@endsection