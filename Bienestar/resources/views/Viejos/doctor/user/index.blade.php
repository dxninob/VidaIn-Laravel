@extends('layouts.doctorapp')
@section('content')
<div class="row">
  
    <form action="{{ route('doctor.user.index') }}">

      <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por documento" aria-label="Search">
      <select name="order" id="order">
        <option value="" selected disabled hidden></option>
        <option value="1">A-Z</option>
        <option value="0">Z-A</option>
      </select>
      <input type="submit" class="btn bg-primary text-white" value="Filtrar">
    </form>

  @foreach ($viewData["users"] as $user)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      
      <div class="card-body text-center">
        <h5>{{ $user->name }} {{ $user->lastname }}</h5>
        <p>Documento: {{ $user->document }}</p>
        <a href="{{ route('doctor.user.show', ['id'=> $user->id]) }}" class="btn bg-primary text-white">Ver</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection