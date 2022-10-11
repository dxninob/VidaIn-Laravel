@extends('layouts.doctorapp')
@section('content')
<div class="row">
  @foreach ($viewData["users"] as $user)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      
      <div class="card-body text-center">
        <h5>{{ $user->name }} {{ $user->lastname }}</h5>
        <p>Documento: {{ $user->document }}</p>
        <a href="{{ route('doctor.user.index', ['id'=> $user->id]) }}" class="btn bg-primary text-white">Ver</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection