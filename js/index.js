$(document).ready(function(){

    var events = [{
        id:'a',
        title: 'default event',
        start: '2024-06-21'
    }];

    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        // display settings
        height: 700,
        themeSystem: 'bootstrap5',
        initialView: 'dayGridMonth',
        headerToolbar: { center: 'dayGridMonth, timeGridWeek, timeGridDay'},

        // click handler
        selectable: true,
        dateClick: function(info){
            $("#event-date").val(info.dateStr);
            $("#calendar-modal").modal("toggle");
        },

        events:events
    });

    calendar.render();

    // form submit
    $("#event-form").submit(function(e){
        e.preventDefault();

        let new_event = [{
            id: 'b',
            title: $("#event-description").val(),
            start: $("#event-date").val()
        }];

        $(this).trigger("reset");
        $("#calendar-modal").modal("toggle");

        calendar.addEventSource(new_event);
    });

    // button create click
    $("#btn-create-event").click(function(){
        $("#event-form").trigger("reset");
    });
});