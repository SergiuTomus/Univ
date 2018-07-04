<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    
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
            <h6>Select the course:</h6>
              <select>
                <option value="tehnici">Tehnici Avansate de Programare</option>
                <option value="ia">Inteligenta Artificiala</option>
                <option value="software">Software Matematic</option>
                <option value="teoria">Teoria Compilatoarelor</option>
              </select>
            <br><br>
            <h6>Select the hall:</h6>
              <select>
                <option value="tehnici">LIT 1</option>
                <option value="ia">LMN</option>
                <option value="software">A8</option>
                <option value="teoria">LIT 2</option>
              </select>
            <br><br>
            <h6>Select the time:</h6>
            <input class="timepicker" type="text" name="timepicker"/>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
          
        </div>
      </div>
    </div>

    <script>
        var allAppointmentsRoute = "{{ route('allAppointments') }}";
        console.log(allAppointmentsRoute);
    </script>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appointment/moment.min.js')}}"></script>
    <script src="{{asset('js/appointment/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/appointment/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/appointment/wickedpicker.js')}}"></script>
    <script src="{{asset('js/appointment/calendarfunction.js')}}"></script>

   
  </body>
</html>
