 <?php
        include('class/Appointment.php');
        $object = new Appointment;
        include('navbar.php');


    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medical Inventory - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->


                    <form action="" methods="POST">
  <table border="0  ">
    <?php
    $conn =mysqli_connect("localhost","root",""); 
    $db=mysqli_select_db($conn,'loginsystem');   
    $query = "SELECT * FROM medicine where name='syrup'";
    $query_run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($query_run))
    {
      ?>



      <tr>
        <td><h3><b>Medicine Name:<?php echo $row['name'];?></b></h3></td>
      </tr>
      <tr>
        <td><h5><b>Price <?php echo $row['price'];?></b></h5></td>
    </tr>
        
        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="Image" style="width:200px; height:200px"    >' ?></td>




      </tr>
      <?php

    }



    ?>
  </table>

  <p>
      
    <b>PRODUCT DETAILS</b><br></p>
Manufacturer/Marketer address
Corporate Communications, Johnson & Johnson Private Limited., 501 Arena Space, Behind Majas Bus Depot, Off Jogeshwari Vikhroli Link Road, Jogeshwari (E), Mumbai 400 060

Country Of Origin
India

Disclaimer
While we strive to provide complete, accurate, and expert-reviewed content on our 'Platform', we make no warranties or representations and disclaim all responsibility and liability for the completeness, accuracy, or reliability of the aforementioned content. The content on our platform is for informative purposes only, and may not cover all clinical/non-clinical aspects. Reliance on any information and subsequent action or inaction is solely at the user's risk, and we do not assume any responsibility for the same. The content on the Platform should not be considered or used as a substitute for professional and qualified medical advice. Please consult your doctor for any query pertaining to medicines, tests and/or diseases, as we support, and do not replace the doctor-patient relationship. 

  </p>





                  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>












