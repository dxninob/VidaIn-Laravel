@extends('layouts.doctorapp')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["user"]->name }} {{ $viewData["user"]->lastname }}
        </h5>
        <p class="card-text">Documento: {{ $viewData["user"]->document }}</p>
        <p class="card-text">Email: {{ $viewData["user"]->email }}</p>
        <p class="card-text">Edad: {{ $viewData["user"]->age }} años</p>
        <p class="card-text">Celular: {{ $viewData["user"]->phone }}</p>    
      </div>
    </div>
  </div>
</div>

<figure class="highcharts-figure">
        <div id="container"></div>
        <script>
            Highcharts.chart('container', {
                title: null,
                chart: {
                    type: 'solidgauge'
                },
                credits: {
                    enabled: false
                },
                pane: [
                    {
                    startAngle: 0,
                    endAngle: 360,
                    background: [{
                        backgroundColor: Highcharts.Color('background: #4FA8F')
                            .setOpacity(0.3)
                            .get(),
                        borderWidth: 0
                    }],
                    
                    center: ['25%', '25%'],
                    size: '33%'
                    }, {
                        startAngle: 0,
                        endAngle: 360,
                        background: [{
                            backgroundColor: Highcharts.Color('background: #4FA8FB')
                                .setOpacity(0.3)
                                .get(),
                            borderWidth: 0
                        }],
                        center: ['50%', '25%'],
                        size: '33%'
                    }, {
                        startAngle: 0,
                        endAngle: 360,
                        background: [{
                            backgroundColor: Highcharts.Color('background: #4FA8FB')
                                .setOpacity(0.3)
                                .get(),
                            borderWidth: 0
                        }],
                        center: ['75%', '25%'],
                        size: '33%'
                    }, {
                        startAngle: 0,
                        endAngle: 360,
                        background: [{
                            backgroundColor: Highcharts.Color('background: #4FA8FB')
                                .setOpacity(0.3)
                                .get(),
                            borderWidth: 0
                        }],
                        center: ['25%', '75%'],
                        size: '33%'
                    }, {
                        startAngle: 0,
                        endAngle: 360,
                        background: [{
                            backgroundColor: Highcharts.Color('background: #4FA8FB')
                                .setOpacity(0.3)
                                .get(),
                            borderWidth: 0
                        }],
                        center: ['75%', '75%'],
                        size: '33%'
                    }],

                plotOptions: {
                    solidgauge: {
                        dataLabels: {
                            enabled: true,
                            borderWidth: 0,
                            y: -29,
                            style: {
                                fontSize: '40px',
                                textOutline: false,
                                color: 'background: #4FA8FB'
                            }
                        },
                        rounded: true
                    }
                },

                tooltip: {
                    enabled: false
                },

                yAxis: [
                    {  
                    title: {
                        text: "Autoaceptacion",
                        x: 0,
                        y: 120,
                    },
                    min: 0,
                    max: 100,
                    lineWidth: 0,
                    tickPositions: [],
                    pane: 0
                    }, {
                        title: {
                            text: "Dominio del entorno",
                            x: 0,
                            y: 120,
                        },
                        min: 0,
                        max: 100,
                        lineWidth: 0,
                        tickPositions: [],
                        pane: 1
                    }, {
                        title: {
                            text: "Autonomía",
                            x: 0,
                            y: 120,
                        },
                        min: 0,
                        max: 100,
                        lineWidth: 0,
                        tickPositions: [],
                        pane: 2
                    }, {
                        title: {
                            text: "Relaciones positivas con los demás",
                            x: 0,
                            y: 120,
                        },
                        min: 0,
                        max: 100,
                        lineWidth: 0,
                        tickPositions: [],
                        pane: 3
                    }, {
                        title: {
                            text: "Propósito de vida y crecimiento personal",
                            x: 0,
                            y: 120,
                        },
                        min: 0,
                        max: 100,
                        lineWidth: 0,
                        tickPositions: [],
                        pane: 4
                    }],

                series: [
                    {
                        data: [{
                            color: 'background: #4FA8FB',
                            radius: '104%',
                            innerRadius: '93%',
                            y: parseInt('{{ $viewData['scores'][0] }}'),
                        }],
                        yAxis: 0,
                    }, {
                        data: [{
                            color: 'background: #4FA8FB',
                            radius: '104%',
                            innerRadius: '93%',
                            y: parseInt('{{ $viewData['scores'][1] }}')
                        }],
                        yAxis: 1
                    }, {
                        data: [{
                            color: 'background: #4FA8FB',
                            radius: '104%',
                            innerRadius: '93%',
                            y: parseInt('{{ $viewData['scores'][3] }}')
                        }],
                        yAxis: 2
                    }, {
                        data: [{
                            color: 'background: #4FA8FB',
                            radius: '104%',
                            innerRadius: '93%',
                            y: parseInt('{{ $viewData['scores'][2] }}')
                        }],
                        yAxis: 3
                    }, {
                        data: [{
                            color: 'background: #4FA8FB',
                            radius: '104%',
                            innerRadius: '93%',
                            y: parseInt('{{ $viewData['scores'][4] }}')
                        }],
                        yAxis: 4
                    }]
                });
        </script>
        </figure>
@endsection