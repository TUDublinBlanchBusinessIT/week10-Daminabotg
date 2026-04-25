import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin],
            initialView: 'dayGridMonth',

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },

            slotDuration: '00:10:00',
            editable: true,
            selectable: true,

            events: '/calendar/json',

            dateClick: function(info) {
                document.getElementById('starttime').value =
                    info.date.toISOString().substring(11, 16);

                document.getElementById('bookingDate').value =
                    info.date.toISOString().substring(0, 10);

                const modalElement = document.getElementById('fullCalModal');
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            }
        });

        calendar.render();
    }
});