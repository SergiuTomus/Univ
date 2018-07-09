<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.print.min.css')}}" media='print'>
    <link href="{{asset('css/appointment/wickedpicker.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/appointment.css')}}" rel='stylesheet'>
  </head>

  <body>

    <div id='calendar'></div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Course scheduling</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
         <!--  {!! csrf_field() !!} -->
            <input type="hidden" id="selectedDate"/>
            <h6>Select the course:</h6>
              <select name="course_selector">
                @foreach($courses as $course)
                  <option value="{{$course->id}}">{{$course->name}}</option>
                @endforeach
              </select>
            <br><br>
            <h6>Select the hall:</h6>
              <select name="hall_selector">
                @foreach($halls as $hall)
                  <option value="{{$hall->id}}">{{$hall->name}}</option>
                @endforeach
              </select>
            <br><br>
            <h6>Select the time to start:</h6>
            <input class="timepicker" type="text" name="timepicker" id="timepicker" />
            <br><br>
            <h6>Select the time to end:</h6>
            <input class="timepicker" type="text" name="timepicker2" id="timepicker2" />
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button id="btn-sendData" type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>


    <!-- View Details Modal -->
    <div class="modal" id="detailsModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Appointment details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <h6>Test</h6>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button id="btn-delete" type="button" class="btn btn-primary">Delete appointment</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <script>
        var allAppointmentsRoute = "{{ route('allAppointments') }}";
        var sendAppointmentsRoute = "{{ route('sendAppointments') }}";
        var role = "{{route('getUserRole') }}";
        var userid = "{{route('getUserID') }}";
        var deleteAppointmentsRoute = "{{ route('deleteAppointments') }}";
    </script>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appointment/moment.min.js')}}"></script>
    <script src="{{asset('js/appointment/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/appointment/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/appointment/wickedpicker.js')}}"></script>
    <script src="{{asset('js/appointment/calendarfunction.js')}}"></script>


  </body>
</html>
