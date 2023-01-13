@extends('app')
  
@section('content')      
    <div class="row">  

        <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
            <div class="form-group">
                <img src="/images/{{ $choosenpart->image }}" width="400px">
            </div>
        </div>
    </div>

    <form action="{{ route('storesession',$choosenpart->id) }}" method="POST" enctype="multipart/form-data" class="mb-5">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Pesha:</strong>
                <input type="text" name="weight" class="form-control" placeholder="KG">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Përsëritje:</strong>
                <input type="text" name="reps" class="form-control" placeholder="Numër">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
      
</form>
<ul class="error">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>



@endsection