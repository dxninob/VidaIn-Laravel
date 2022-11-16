@extends('layouts.test')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <h3>Progreso: 0%</h3>
            <div class="progressbar" id="progressbar1">
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
                        @foreach ($viewData['questions1-3'] as $question)
                        <tr scope="row">
                            <td style="text-align:center">{{ $question->id }}.</td>
                            <td>{{ $question->question }}</td>
                            @if($question->id == 1 || $question->id == 3)
                            <td><input id="1" type="radio" name="{{ $question->id }}" value="1" required /></td>
                            <td><input id="2" type="radio" name="{{ $question->id }}" value="2" /></td>
                            <td><input id="3" type="radio" name="{{ $question->id }}" value="3" /></td>
                            <td><input id="4" type="radio" name="{{ $question->id }}" value="4" /></td>
                            <td><input id="5" type="radio" name="{{ $question->id }}" value="5" /></td>
                            @else
                            <td><input id="1" type="radio" name="{{ $question->id }}" value="5" required /></td>
                            <td><input id="2" type="radio" name="{{ $question->id }}" value="4" /></td>
                            <td><input id="3" type="radio" name="{{ $question->id }}" value="3" /></td>
                            <td><input id="4" type="radio" name="{{ $question->id }}" value="2" /></td>
                            <td><input id="5" type="radio" name="{{ $question->id }}" value="1" /></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div class="row mb-0">
                    <div class="button">
                        <button type="submit" class="btn btn-primary bg-secondary" style="float: right;" name="index1" value="1">{{ __('SIGUIENTE') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection