@extends('layouts.app')

@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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

               pane: [{
                         startAngle: 0,
                         endAngle: 360,
                         background: [{
                              backgroundColor: Highcharts.Color('#892442')
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
                              backgroundColor: Highcharts.Color('#892442')
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
                              backgroundColor: Highcharts.Color('#892442')
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
                              backgroundColor: Highcharts.Color('#892442')
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
                              backgroundColor: Highcharts.Color('#892442')
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
                                   color: '#892442'
                              }
                         },
                         rounded: true
                    }
               },

               tooltip: {
                    enabled: false
               },

               yAxis: [{  
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

               series: [{
                         data: [{
                              color: '#892442',
                              radius: '104%',
                              innerRadius: '93%',
                              y: parseInt('{{ $viewData[0] }}'),
                         }],
                         yAxis: 0,
                    }, {
                         data: [{
                              color: '#892442',
                              radius: '104%',
                              innerRadius: '93%',
                              y: parseInt('{{ $viewData[1] }}')
                         }],
                         yAxis: 1
                    }, {
                         data: [{
                              color: '#892442',
                              radius: '104%',
                              innerRadius: '93%',
                              y: parseInt('{{ $viewData[3] }}')
                         }],
                         yAxis: 2
                    }, {
                         data: [{
                              color: '#892442',
                              radius: '104%',
                              innerRadius: '93%',
                              y: parseInt('{{ $viewData[2] }}')
                         }],
                         yAxis: 3
                    }, {
                         data: [{
                              color: '#892442',
                              radius: '104%',
                              innerRadius: '93%',
                              y: parseInt('{{ $viewData[4] }}')
                         }],
                         yAxis: 4
                    }]
          });
     </script>
</figure>
@endsection