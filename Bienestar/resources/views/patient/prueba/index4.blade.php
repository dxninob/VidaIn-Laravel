@extends('layouts.app')
@section('content')
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/test.css') }}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
  <title>@yield('title', 'BienEstar')</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="pad col-md-15">
        <h3>Progreso: 24%</h3>
        <div class="progressbar" id="progressbar4">
          <div></div>
        </div>
        <form action="{{ route('test.save') }}" method="POST">
          @csrf
          <table class="table custom-table">
            <thead>
              <tr>
                <th scope="col" style="text-align:center"> Número </th>
                <th scope="col" style="text-align:center"> Pregunta </th>
                <th scope="col" style="text-align:center"> Totalmente en desacuerdo </th>
                <th scope="col" style="text-align:center"> En desacuerdo </th>
                <th scope="col" style="text-align:center"> Ni de acuerdo ni en desacuerdo </th>
                <th scope="col" style="text-align:center"> De acuerdo </th>
                <th scope="col" style="text-align:center"> Totalmente de acuerdo </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($viewData['questions10-12'] as $question)
              <tr scope="row">
                <td>{{ $question->id }}.</td>
                <td>{{ $question->question }}</td>
                <td><input id="1" type="radio" name="{{ $question->id }}" value="1" required /></td>
                <td><input id="2" type="radio" name="{{ $question->id }}" value="2" /></td>
                <td><input id="3" type="radio" name="{{ $question->id }}" value="3" /></td>
                <td><input id="4" type="radio" name="{{ $question->id }}" value="4" /></td>
                <td><input id="5" type="radio" name="{{ $question->id }}" value="5" /></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <div class="row mb-0">
            <div class="button">
              <button type="submit" class="btn btn-primary bg-secondary" style="float: right;" name="index4" value="4">{{ __('Siguiente') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection