<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <meta name="csrf-token" content="{{ csrf_token() }}">

      <link href="https://fonts.googleapis.com/css?family=Arapey|Cinzel|Encode+Sans+Condensed|Prata|Raleway|Source+Sans+Pro" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.print.min.css')}}" media='print'>
    <link href="{{asset('css/appointment/wickedpicker.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/appointment.css')}}" rel='stylesheet'>
  </head>

  <body>


  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }} - University of Kattegat</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @else
                      <li class="nav-item"><a href="{{route('users.show',Auth::user()->slug)}}" class="nav-link"> {{Auth::user()->first_name}}  {{Auth::user()->last_name}}</a></li>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>


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
            <h6 id="courseEvent">Course</h6>
            <h6 id="teacherEvent">Teacher</h6>
            <h6 id="hallEvent">Hall</h6>
            <h6 id="dateEvent">Date</h6>

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
