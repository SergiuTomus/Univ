$(document).ready(function() {



    $('#calendar').fullCalendar({
        events: function(start, end, timezone, callback) {
          $.ajax({
            url: allAppointmentsRoute,
            dataType: 'json',
            success: function(response) {

            var events = [];
            var length =  response['appointments'].length;
            for(i=0; i<length; i++) {
                events.push({
<<<<<<< HEAD
                    title: response['appointments'][i]['first_name'],
                    start: response['appointments'][i]['app_date'],
=======
                    title: 'Lore Ipsum',
                    start: data['appointments'][i]['app_date']
>>>>>>> 2e82c8ba485c95953ff6fa600e01caadd9c3efb8
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
      var timepicker = $('#timepicker').val();

      //send data to server via AJAX
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: {
          selectedDate: selectedDate,
          cours_id: cours_id,
          hall_id: hall_id,
          timepicker: timepicker
        },
        url: sendAppointmentsRoute,
        dataType: 'json',
        success: function(data){
          console.log(data);
        }
      });


    };


});
