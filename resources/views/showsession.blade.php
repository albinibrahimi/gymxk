@extends('app')

@section('content')

 

    <table class="table table-striped table-dark text-center align-middle">
  <thead>
    <tr>
      <th scope="col">Ushtrimi</th>
      <th scope="col">Emri</th>
      <th scope="col">Pesha</th>
      <th scope="col">Përsëritje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($session as $session)
    <tr>
      <td><img src="/images/{{$session->image}}" width="100px"></td>
      <td>{{$session->name}}</td>
      <td>{{$session->weight}} KG</td>
      <td>{{$session->reps}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection