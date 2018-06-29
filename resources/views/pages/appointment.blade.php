<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <link href="{{asset('css/appointment/fullcalendar.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.print.min.css')}}" media='print'>
    <style>

      body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
      }

      #calendar {
        max-width: 900px;
        margin: 0 auto;
      }

    </style>
  </head>

  <body>

    <div id='calendar'></div>

    <script>
        var allAppointmentsRoute = "{{ route('allAppointments') }}";
    </script>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appointment/moment.min.js')}}"></script>
    <script src="{{asset('js/appointment/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/appointment/calendarfunction.js')}}"></script>

   
  </body>
</html>
