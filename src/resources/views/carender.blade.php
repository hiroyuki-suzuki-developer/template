@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <div class="p-3 rounded shadow-sm bg-white">
                <div id='calendarWeek'></div>
            </div>
            <div class="p-3 rounded shadow-sm bg-white">
                <div id='calendarMonth'></div>
            </div>
        </div>
    </div>
</div>

<script src="/fullcalendar.js"></script>
<link href="/fullcalendar.css" rel="stylesheet">
<script>
function formatDate(dt) {
  var y = dt.getFullYear();
  var m = ('00' + (dt.getMonth()+1)).slice(-2);
  var d = ('00' + dt.getDate()).slice(-2);
  return (y + '-' + m + '-' + d);
}
function getAfterNdays(n){
   var dt = new Date();
   dt.setDate(dt.getDate()+n);
   return formatDate(dt);
}
function getDateDiff(dateString1, dateString2) {
  var date1 = new Date(dateString1);
  var date2 = new Date(dateString2);
  var msDiff  = date1.getTime() - date2.getTime();
  return Math.ceil(msDiff / (1000 * 60 * 60 *24));
}
document.addEventListener('DOMContentLoaded', function() {
    const today = formatDate(new Date());
    let nextMonth = new Date();
    nextMonth.setMonth(1);
    let nextMonthDate = formatDate(nextMonth);
    
    var calendarWeekEl = document.getElementById('calendarWeek');
    var calendarWeek = new FullCalendar.Calendar(calendarWeekEl, {
        locale: 'ja',
        initialView: 'timeGridWeek',
        validRange: function() {
            return {
                start: today,
                end: nextMonthDate,
            };
        },
        events:[
            {
                title: '予定があります',
                start: today + 'T07:00:00',
                end: today + 'T17:00:00',
            }
        ]
    });
    calendarWeek.render();
    var calendarMonthEl = document.getElementById('calendarMonth');
    var calendarMonth = new FullCalendar.Calendar(calendarMonthEl, {
        locale: 'ja',
        initialView: 'dayGridMonth',
        events:[
            {
                title: '予定があります',
                start: today + 'T07:00:00',
                end: today + 'T17:00:00',
            }
        ]
    });
    calendarMonth.render();
});
</script>
@endsection
