@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <form action="{{ route('test.save') }}" method="POST">
        @csrf
        <table class="default">
          <tr>
            <td style="text-align:center"> <strong> Pregunta </strong></td>
            <td style="text-align:center"> <strong> Totalmente en desacuerdo </strong></td>
            <td style="text-align:center"> <strong> En desacuerdo </strong></td>
            <td style="text-align:center"> <strong> Ni de acuerdo ni en desacuerdo </strong></td>
            <td style="text-align:center"> <strong> De acuerdo </strong></td>
            <td style="text-align:center"> <strong> Totalmente de acuerdo </strong></td>
          </tr>
          @foreach ($viewData['questions7-9'] as $question)
          <tr>
            <td>{{ $question->id}}. {{ $question->question }}</td>
            <td style="text-align:center"><input id="1" type="radio" name="{{ $question->id }}" value="1" required /></td>
            <td style="text-align:center"><input id="2" type="radio" name="{{ $question->id }}" value="2" /></td>
            <td style="text-align:center"><input id="3" type="radio" name="{{ $question->id }}" value="3" /></td>
            <td style="text-align:center"><input id="4" type="radio" name="{{ $question->id }}" value="4" /></td>
            <td style="text-align:center"><input id="5" type="radio" name="{{ $question->id }}" value="5" /></td>
          </tr>
          @endforeach
        </table>
        <br>
        <div class="row mb-0">
          <div>
            <button type="submit" class="btn btn-primary bg-secondary" name="index3" value="3">{{ __('Siguiente') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection