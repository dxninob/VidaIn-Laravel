@extends('layouts.app')
@section('content')
<div class="container d-flex align-items-center flex-column ">
    <h1 class="letter-secondary">Actividades</h1>
</div>
<br>

<link href="{{ asset('/css/activities.css') }}" rel="stylesheet" />

<body>
    <table class="default">
        <tr>
            <td WIDTH="50%">
                <h4 class="letter-secondary">¿Te gustó la actividad?</h4>
            </td>
        </tr>
        <tr>
            <td WIDTH="50%">
                <div class="container d-flex align-items-center flex-column ">
                    <div class="containers">
                        <p class="profile-font">Actividad {{ $viewData['activity']->id }}</p>
                        <p class="profile-font">{{ $viewData['activity']->description }}</p>
                    </div>
                </div>

            </td>
            <td WIDTH="50%">
                <form action="{{ route('activity.save', ['id'=> $viewData['activity']->id]) }}" method="POST">
                    @csrf
                    <div class="buttons">
                        <button class="btn1" name='eval' type='submit' value="1">Aceptar</button>
                        <button class="btn2" name='eval' type='submit' value="0">Denegar</button>
                    </div> 
                </form>
            </td>
        </tr>
    </table>
</body>

@endsection