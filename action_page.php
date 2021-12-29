 <?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $full_name =  $_REQUEST['firstname'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $city =  $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $zip = $_REQUEST['zip'];
        
          
        // Performing insert query execution
        // here our table name is college
       
        $sql = "INSERT INTO order (firstname, lastname, email) VALUES ('Ishaan', 'john@example.com','Bandra','Mumbai','Maharashtra','10011'";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?> 
