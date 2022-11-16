
    <!DOCTYPE html>
    <html>
    <head>
        <title>BienEstar</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <link rel="stylesheet" href="css/calendario.css" />
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="container text-center">
                <h1>Calendario</h1>
                </div>
            </div>
            <div id='calendar'></div>
        </div>
        <script>
            $(document).ready(function () {
                
            var SITEURL = "{{ url('/') }}";
            
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var calendar = $('#calendar').fullCalendar({
                                editable: true,
                                events: SITEURL + "/fullcalender",
                                displayEventTime: false,
                                editable: true,
                                eventRender: function (event, element, view) {
                                    if (event.allDay === 'true') {
                                            event.allDay = true;
                                    } else {
                                            event.allDay = false;
                                    }
                                },
                                selectable: true,
                                selectHelper: true,
                                select: function (start, end, allDay) {
                                    var title = prompt('Agendar una actividad:');
                                    if (title) {
                                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                        $.ajax({
                                            url: SITEURL + "/fullcalenderAjax",
                                            data: {
                                                title: title,
                                                start: start,
                                                end: end,
                                                type: 'add'
                                            },
                                            type: "POST",
                                            success: function (data) {
                                                displayMessage("Actividad agendada");
            
                                                calendar.fullCalendar('renderEvent',
                                                    {
                                                        id: data.id,
                                                        title: title,
                                                        start: start,
                                                        end: end,
                                                        allDay: allDay
                                                    },true);
            
                                                calendar.fullCalendar('unselect');
                                            }
                                        });
                                    }
                                },
                                eventDrop: function (event, delta) {
                                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
            
                                    $.ajax({
                                        url: SITEURL + '/fullcalenderAjax',
                                        data: {
                                            title: event.title,
                                            start: start,
                                            end: end,
                                            id: event.id,
                                            type: 'update'
                                        },
                                        type: "POST",
                                        success: function (response) {
                                            displayMessage("Actividad actualizada");
                                        }
                                    });
                                },
                                eventClick: function (event) {
                                    var deleteMsg = confirm("¿Estás seguro que deseas eliminar la actividad?");
                                    if (deleteMsg) {
                                        $.ajax({
                                            type: "POST",
                                            url: SITEURL + '/fullcalenderAjax',
                                            data: {
                                                    id: event.id,
                                                    type: 'delete'
                                            },
                                            success: function (response) {
                                                calendar.fullCalendar('removeEvents', event.id);
                                                displayMessage("Actividad eliminada");
                                            }
                                        });
                                    }
                                }
            
                            });
            
            });
            
            function displayMessage(message) {
                toastr.success(message, 'Actividad');
            } 
            
        </script>
    </body>
    </html>
