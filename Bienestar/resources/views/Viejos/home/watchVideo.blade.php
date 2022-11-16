@extends('layouts.app')
@section('content')

<link href="{{ asset('/css/video.css') }}" rel="stylesheet" />
<div align="center">
<iframe width="1060" height="615" src="https://www.youtube.com/embed/0CG1vCz6MDs?autoplay=1" frameborder="1" allowfullscreen></iframe>
</div>
<div class="button">
        <a class="btn btn-primary bg-secondary btn-size button" href="{{ route('test.index1') }}">Comenzar Prueba</a> 
    </div>


@endsection