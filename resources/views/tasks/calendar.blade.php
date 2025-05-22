@extends('layouts.app')

@section('content')
    <div class="flex flex-row gap-5">
        <h1 class="text-3xl font-semibold">Calendar</h1>
        {{-- <span class="text-blue-800 text-2xl font-medium me-2 px-2.5 py-0.5 border rounded-sm">12</span> --}}
    </div>
    <div class="flex flex-row gap-5 mt-5">
        <div class="w-full">
            <div id='calendar'></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar')
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 650,
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                }
            })
            calendar.render()
        })

    </script>
@endsection
