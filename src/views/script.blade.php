<script>
    var calendar;
    $(document).ready(function(){
        var calendarEl = document.getElementById('calendar-{{ $id }}')
        calendar = new FullCalendar.Calendar(calendarEl,
            {!! $options !!},
        );
        calendar.render();
    });
</script>