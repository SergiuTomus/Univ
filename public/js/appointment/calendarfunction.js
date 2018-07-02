$(document).ready(function() {


    $('#calendar').fullCalendar({
        /*events: function(start, end, timezone, callback) {
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
        } */

        dayClick: function(date, jsEvent, view) {

          alert('Clicked on: ' + date.format());
          
          $('#myModal').modal('show');
         // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
      
          //alert('Current view: ' + view.name);
      
          // change the day's background color just for fun
          $(this).css('background-color', '#ccffff');
      
        }
      });
});