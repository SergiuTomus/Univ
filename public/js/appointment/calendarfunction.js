var rol;
var userid;
$(document).ready(function() {

        $.ajax({
            url: role,
            dataType: 'json',
            data: {role: role},
            success: function (response) {
                rol = response['userRole'];
            }
        });

        $.ajax({
            url: userid,
            dataType: 'json',
            data: {userid: userid},
            success: function (response) {
                userid = response['userid'];
            }
        });

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
                                user_id: response['appointments'][i]['user_id'],
                              });
                         }

                          callback(events);
                        }
                      });
                    },

                    dayClick: function(date, jsEvent, view) {

                     // alert('Clicked on: ' + date.format());
                        if(rol === 3) {
                            return false;
                        }
                        else {
                            var dateTime = moment(date).format("YYYY-MM-DD");
                            $('#selectedDate').val(dateTime);

                            $('#myModal').modal('show');
                            $('.timepicker').wickedpicker();

                            //$(this).css('background-color', '#ccffff');
                        }
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

                $('#btn-delete').click(function() {
                  if(userid === calEvent.user_id){
                    return deleteAppointment();
                  }

                  else {
                      return false;
                  }

                });

                function deleteAppointment() {
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
                    url: deleteAppointmentsRoute,
                    dataType: 'json',
                    success: function(data){
                      console.log(data);
                    }
                  });


                };



        });


