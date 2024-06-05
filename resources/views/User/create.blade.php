@extends('layouts.app')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter Utilisateur</h4>
        <p class="card-description">
          Ajouter utilisateur
        </p>
        <form action="{{route('storeUser')}}" method="post" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="exampleInputNom1">Nom </label>
            <input type="text" name="nom" class="form-control" id="exampleInputNom1" placeholder="nom">
          </div>
          <div class="form-group">
            <label for="exampleInputPrenom1">Prenom </label>
            <input type="text" name="prenom" class="form-control" id="exampleInputPrenom1" placeholder="prenom">
          </div>
          <div class="form-group">
            <label for="exampleInputTel">Telephone</label>
            <input type="number" name="tel" class="form-control" id="exampleInputTel" placeholder="tel">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="exampleInputCity1" placeholder="adresse">
          </div>

          <div class="form-group">
            <label >Role</label>
            <div class="col-sm-14">
              <select class="form-control" name="id_role">
                <option selected >Cliquer</option>
                @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->intitule}}</option> 
                @endforeach
              </select>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">enregister</button>
          <button class="btn btn-danger">annuler</button>
        </form>
      </div>
    </div>
  </div>

@endsection