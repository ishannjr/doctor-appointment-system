
<?php


  		$conn = mysqli_connect("localhost", "root", "", "loginsystem");
        //escapes special characters in a string
        $full_name =  $_REQUEST['firstname'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $city =  $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $zip = $_REQUEST['zip'];
        $query    = "INSERT into `order` (fullname,email,address,city,state,pincode)
                     VALUES ('$full_name', 
            '$email','$address','$city','$state','$zip')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
        ?>