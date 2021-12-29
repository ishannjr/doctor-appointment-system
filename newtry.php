<?php
include('class/Appointment.php');

$object = new Appointment;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

  <style>
body {
  background-image: url('doctor2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo $_SESSION['patient_name']; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li><a href="profile.php">Profile</a></li>
         <li><a href="newtry.php">Book Appointment</a></li>
          <li><a href="appointment.php">My Appointment</a></li>
           <li><a href="fever.php">Medicine Suggestions</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
     
    </div>
  </div>
</nav>
  
  <div class="container-fluid">
  <br />
  <div class="card">
    <div class="card-header"><h4>Doctor Schedule List</h4></div>
      <div class="card-body">
        <div class="table-responsive">
              <table class="table table-striped table-bordered" id="appointment_list_table" border="50">
                <thead>
                  <tr>
                    <th>Doctor Name</th>
                    <th>Education</th>
                    <th>Speciality</th>
                    <th>Appointment Date</th>
                    <th>Appointment Day</th>
                    <th>Available Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
          </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>

<?php

include('footer.php');

?>

<div id="appointmentModal" class="modal fade">
    <div class="modal-dialog">
      <form method="post" id="appointment_form">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">Make Appointment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <span id="form_message"></span>
                    <div id="appointment_detail"></div>
                    <div class="form-group">
                      <label><b>Reasone for Appointment</b></label>
                      <textarea name="reason_for_appointment" id="reason_for_appointment" class="form-control" required rows="5"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_doctor_id" id="hidden_doctor_id" />
                <input type="hidden" name="hidden_doctor_schedule_id" id="hidden_doctor_schedule_id" />
                <input type="hidden" name="action" id="action" value="book_appointment" />
                <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Book" />
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      </form>
    </div>
</div>


<script>

$(document).ready(function(){

  var dataTable = $('#appointment_list_table').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
      url:"action.php",
      type:"POST",
      data:{action:'fetch_schedule'}
    },
    "columnDefs":[
      {
                "targets":[6],        
        "orderable":false,
      },
    ],
  });

  $(document).on('click', '.get_appointment', function(){

    var doctor_schedule_id = $(this).data('doctor_schedule_id');
    var doctor_id = $(this).data('doctor_id');

    $.ajax({
      url:"action.php",
      method:"POST",
      data:{action:'make_appointment', doctor_schedule_id:doctor_schedule_id},
      success:function(data)
      {
        $('#appointmentModal').modal('show');
        $('#hidden_doctor_id').val(doctor_id);
        $('#hidden_doctor_schedule_id').val(doctor_schedule_id);
        $('#appointment_detail').html(data);
      }
    });

  });

  $('#appointment_form').parsley();

  $('#appointment_form').on('submit', function(event){

    event.preventDefault();

    if($('#appointment_form').parsley().isValid())
    {

      $.ajax({
        url:"action.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#submit_button').attr('disabled', 'disabled');
          $('#submit_button').val('wait...');
        },
        success:function(data)
        {
          $('#submit_button').attr('disabled', false);
          $('#submit_button').val('Book');
          if(data.error != '')
          {
            $('#form_message').html(data.error);
          }
          else
          { 
            window.location.href="appointment.php";
          }
        }
      })

    }

  })

});

</script>
