@extends('layouts.doctorapp')
@section('content')
<div class="row">
  @foreach ($viewData["activities"] as $activity)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      
      <div class="card-body text-center">
        <h5>{{ $activity->description }}</h5>
        <a href="{{ route('activity.show', ['id'=> $activity->id]) }}" class="btn bg-primary text-white">Ver</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection