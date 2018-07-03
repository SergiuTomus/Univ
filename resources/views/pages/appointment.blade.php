<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/appointment/fullcalendar.print.min.css')}}" media='print'>
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
            <h6>Select the course:
              <span>
                <select>
                  <option value="volvo">Inteligenta Artificiala</option>
                  <option value="saab">Sofware Matematic</option>
                  <option value="opel">Teoria Compilatoarelor</option>
                  <option value="audi">Tehnici Avansate de Programare adfddsgdfhgdfgsdysfhfhtthdryydy</option>
                </select>
              </span>
            </h6>
            <h6>Select the hall:</h6>
            <h6>Select the time:</h6>
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
    <script src="{{asset('js/appointment/calendarfunction.js')}}"></script>

   
  </body>
</html>
