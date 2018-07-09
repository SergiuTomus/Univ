$(document).ready(function() {

        $.ajax({
            url: role,
            dataType: 'json',
            data : { role : role },
            success:function (response) {
                if(response['userRole'] === 3) {
                  
                  //var course;
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
                                title: response['appointments'][i]['hallName'],
                                start: response['appointments'][i]['app_date'],
                                end: response['appointments'][i]['end_date'],
                                course: response['appointments'][i]['courseName'],
                                app_id: response['appointments'][i]['id'],
                              });
                         }
            
                          callback(events);
                        }
                      });
                    },

                    eventClick: function(calEvent, jsEvent, view) {

                      $('#detailsModal').modal('show');
                      $("h6").html('The scheduled course is: ' + calEvent.course);
                      //alert('Event: ' + calEvent.start);
                      //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                      //alert('View: ' + view.name);
                  
                      // change the border color just for fun
                      $(this).css('border-color', 'red');
                  
                    },

                    eventAfterRender: function(event, $el, view) {
                      var formattedTime = $.fullCalendar.formatDates(event.start, event.end, "HH:mm { - HH:mm}");
                      // If FullCalendar has removed the title div, then add the title to the time div like FullCalendar would do
                      if($el.find(".fc-event-title").length === 0) {
                          $el.find(".fc-event-time").text(formattedTime + " - " + event.title);
                      }
                      else {
                          $el.find(".fc-event-time").text(formattedTime);
                      }
                  }
            
                });


                /////// For teachers and admin ///////
                }
                else{

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
                                title: response['appointments'][i]['hallName'],
                                start: response['appointments'][i]['app_date'],
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
            
                    },

                    eventClick: function(calEvent, jsEvent, view) {

                      $('#detailsModal').modal('show');
                      //alert('Event: ' + calEvent.start);
                      //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                      //alert('View: ' + view.name);
                  
                      // change the border color just for fun
                      $(this).css('border-color', 'red');
                  
                    }

                });

                $('#btn-sendData').click(function() {
                  submitAppointment();
                });

                function submitAppointment() {
                  $('#myModal').modal('toggle');
                  var selectedDate = $('#selectedDate').val();
                  var course_id = $('select[name=course_selector]').val();
                  var hall_id = $('select[name=hall_selector]').val();
                  var timepicker = $('#timepicker').val();
                  var timepicker2 = $('#timepicker2').val();
            
                  //send data to server via AJAX
                  $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {
                      selectedDate: selectedDate,
                      course_id: course_id,
                      hall_id: hall_id,
                      timepicker: timepicker,
                      timepicker2: timepicker2
                    },
                    url: sendAppointmentsRoute,
                    dataType: 'json',
                    success: function(data){
                      console.log(data);
                    }
                  });
            
            
                };

                }
            }
        });

});
