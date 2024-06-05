@extends('layouts.app')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter role</h4>
        <p class="card-description">
          Ajouter role
        </p>
        <form action="{{route('storeRole')}}" method="post" class="forms-sample">
            @csrf
         
          <div class="form-group">
            <label for="exampleInputPrenom1">Intitule </label>
            <input type="text" name="intitule" class="form-control" id="exampleInputPrenom1" placeholder="intitule">
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">enregister</button>
          <button class="btn btn-danger">annuler</button>
        </form>
      </div>
    </div>
  </div>

@endsection