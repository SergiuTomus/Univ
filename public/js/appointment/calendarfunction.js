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
        }
      });
});