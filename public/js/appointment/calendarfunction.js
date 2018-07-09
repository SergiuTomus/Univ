$(document).ready(function() {

        $.ajax({
            url: role,
            dataType: 'json',
            data : { role : role },
            success:function (response) {
                if(response['userRole'] === 3) {
                  

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
