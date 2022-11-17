@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/prueba.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <title>BienEstar</title>
</head>
<body class="color-bg">
    <div class="introduccion" >
        <p> </p>
    </div>
    <div class="boton1" >
        <br>
        <br>
        <br>
        <a id="boton1" href="{{ route('test.index') }}">COMENZAR<br> PRUEBA</a>
    </div>
</body>
@endsection