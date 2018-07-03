<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>
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

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            Modal body..
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> --}}

    <script>
        var allAppointmentsRoute = "{{ route('allAppointments') }}";
    </script>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appointment/moment.min.js')}}"></script>
    <script src="{{asset('js/appointment/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/appointment/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/appointment/calendarfunction.js')}}"></script>

   
  </body>
</html>
