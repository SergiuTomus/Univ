$(document).ready(function() {



    $('#calendar').fullCalendar({
        events: function(start, end, timezone, callback) {
          $.ajax({
            url: allAppointmentsRoute,
            dataType: 'json',
            success: function(data) {

            var events = [];
            var length =  data['appointments'].length;
            for(i=0; i<length; i++) {
                events.push({
                    title: 'Lorem Ipsum',
                    start: data['appointments'][i]['app_date']
                  });
             }

              callback(events);
            }
          });
        }, 

        dayClick: function(date, jsEvent, view) {

         // alert('Clicked on: ' + date.format());
          var dateTime = moment(date).format("YYYY-MM-DD");
          $('#selectedDate').val(dateTime);
          
          $('#myModal').modal('show');
          $('.timepicker').wickedpicker();

          //$(this).css('background-color', '#ccffff');
      
        }
    });

    
    $('#btn-sendData').click(function() { 
      submitAppointment();
    });

    function submitAppointment() {
      $('#myModal').modal('toggle');
      var selectedDate = $('#selectedDate').val();
      var cours_id = $('select[name=course_selector]').val();
      var hall_id = $('select[name=hall_selector]').val();

      //send data to server via AJAX
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: {
          selectedDate: selectedDate,
          cours_id: cours_id,
          hall_id: hall_id
        },
        url: sendAppointmentsRoute,
        dataType: 'json',
        success: function(data){
          console.log(data);
        }
      });

      
    };


});