$(document).ready(function() {


    $('#btn-saveData').click(function() { 
      submitAppointment();
    });

    function submitAppointment() {
      $('#myModal').modal('toggle');

      //send data to server via AJAX
      $.ajax({
        type: "POST",
        url: sendAppointmentsRoute,
        dataType: 'json',
        success: function(data){
          alert(data);
        }
      });

      
    };

   

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

    

});