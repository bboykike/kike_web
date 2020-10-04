document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        nowIndicator: true,
        dayMaxEvents: true, // allow "more" link when too many events
        views: {
            dayGridMonth: {
                buttonText: "Mes",
            },
            timeGridWeek: {
                buttonText: "Semana",
            },
            timeGridDay: {
                buttonText: "Día",
            },
        },
        defaultView: "timeGridWeek",
        droppable: true, // this allows things to be dropped onto the calendar
        editable: false,
        eventLimit: false, // allow "more" link when too many events
        navLinks: true,
        events: function(start, callback) {
            var retu = 0;
            var i = 0;
            var table = $.ajax({
                type: "GET",
                url: "../funciones/fullcalendar/getServicios.php",
                success: (res) => {
                    res = JSON.parse(res);

                    let actividades = [];
                    res.forEach((element) => {

                        let id = element['id_servicio']
                        let Tipo = element['Tipo']
                        let fechaRe = element['FechaIn']
                        let problema = element['Problema']
                        let estatus = element['estatus_servicio']
                        let cliente = element['nombre_cliente']
                        let color;

                        if (estatus == "Activo") {
                            color = "#38b665"
                        } else {
                            color = "#bb2124"
                        }


                        actividades.push({
                            id: id,
                            title: Tipo + ': ' + cliente,
                            start: fechaRe,
                            description: problema,
                            color: color
                        });
                    });
                    retu++;
                    callback(actividades);
                },
                dateClick: function(info) {
                    alert('Clicked on: ' + info.dateStr);
                    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                    alert('Current view: ' + info.view.type);
                    // change the day's background color just for fun
                    info.dayEl.style.backgroundColor = 'red';
                }


            });
        },
        eventClick: function(info) {
            console.log(info.event.title)

        },

    });
    calendar.setOption("locale", "es");
    calendar.render();
});