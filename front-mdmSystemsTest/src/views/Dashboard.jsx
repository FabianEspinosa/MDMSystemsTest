import React, { useState, useEffect } from 'react';
import FullCalendar from '@fullcalendar/react';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';

const Calendar = () => {
  const [events, setEvents] = useState([]);

  useEffect(() => {
    // Aquí podrías hacer una llamada a una API para obtener los eventos y actualizar el estado `events`.
    const newEvents = [
      { title: 'Evento 1', start: '2023-02-26T10:00:00', end: '2023-02-26T12:00:00' },
      { title: 'Evento 2', start: '2023-02-27T14:00:00', end: '2023-02-27T16:00:00' },
      { title: 'Evento 3', start: '2023-02-28T09:00:00', end: '2023-02-28T11:00:00' },
    ];

    setEvents(newEvents);
  }, []);

  return (
    <FullCalendar
      plugins={[dayGridPlugin, timeGridPlugin, listPlugin]}
      initialView="dayGridMonth"
      events={events}
    />
  );
};

export default Calendar;

