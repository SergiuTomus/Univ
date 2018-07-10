var rol;
var userid;
var appUser_id;
var startHour, endHour;
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
                                app_id: response['appointments'][i]['id'],
                                course: response['appointments'][i]['courseName'],
                                hall: response['appointments'][i]['hallName'],
                                first_name: response['appointments'][i]['first_name'],
                                last_name: response['appointments'][i]['last_name'],
                                start_hour: response['appointments'][i]['app_date'].substr(11, 5),
                                end_hour: response['appointments'][i]['end_date'].substr(11, 5)
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
                       appUser_id = calEvent.user_id;

                       
                       //alert(startHour + ' - '  + endHour);
                      
                       $('#courseEvent').html('Course name: ' + calEvent.course);
                       $('#teacherEvent').html('Teacher name: ' + calEvent.first_name + ' ' + calEvent.last_name);
                       $('#hallEvent').html('Reserved hall: ' + calEvent.hall);
                       $('#dateEvent').html('The appointment time: ' + calEvent.start_hour + ' - ' + calEvent.end_hour);

                      // change the border color
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
                  if(userid === appUser_id ){
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


