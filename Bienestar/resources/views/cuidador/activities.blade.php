@extends('layouts.cuidadorapp')
@section('content')
<div class="text-center">
    Actividades
</div>
<br>
@foreach ($viewData['activities'] as $activities)
    <p> {{ $activities->description }}</p>
@endforeach

@endsection