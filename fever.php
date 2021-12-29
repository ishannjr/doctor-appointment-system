 <?php
        include('class/Appointment.php');
        $object = new Appointment;
        include('navbar.php');


    ?>



<html>
<body>
<form action="" methods="POST">
  <table border="0  ">
    <?php
    $conn =mysqli_connect("localhost","root",""); 
    $db=mysqli_select_db($conn,'loginsystem');   
    $query = "SELECT * FROM medicine where name='dolo'";
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
About Dolo-650 Tablet 15's
Dolo-650 Tablet 15's belongs to the group of mild analgesics (pain killer), and antipyretic (fever-reducing agent) used to treat mild to moderate pain including headache, migraine, toothache, menstrual period pain, osteoarthritis pain, musculoskeletal pain, and reducing fever. Pain and fever are caused by the activation of pain receptors due to the release of certain natural chemicals in our body like prostaglandin. 

Dolo-650 Tablet 15's contains 'Paracetamol' which prevents the release of a natural chemical (prostaglandin), causing a sensation of pain, inflammation, and fever. Dolo-650 Tablet 15's also has an antipyretic effect and can reduce body temperature in cases of fever. Dolo-650 Tablet 15's works by resetting the temperature-regulating centre in the brain, thus decreasing temperature in fevers caused due to illness, chemotherapy, or other reasons. 

Dolo-650 Tablet 15's is available as an over-the-counter medication. However, it is always recommended to use it after consulting a doctor. The dose and duration of the medication depend on your condition and its severity. The common side effects of Dolo-650 Tablet 15's include agitation, nervousness, and insomnia. Everyone needs not experience the above side effects as they vary depending on their health, underlying conditions, age, weight and gender. In case of any discomfort, speak with a doctor.

Before starting Dolo-650 Tablet 15's, please inform your doctor if you have any known allergy to paracetamol, heart, kidney or liver problems, or persistent headaches. And also, if prescribed by your doctor, ask if the medication is safe to use during pregnancy and breastfeeding.

Uses of Dolo-650 Tablet 15's
Fever, Pain relief

Medicinal Benefits
Dolo-650 Tablet 15's contains 'Paracetamol' which is a mild analgesic and fever reducer. Dolo-650 Tablet 15's can also be used to treat mild to moderate pain in conditions of headache, toothache, backache, period pain, and muscle pain. It has less gastric irritating properties compared to other pain killers like aspirin and ibuprofen. It is the drug of the first choice for reducing fever suitable for all age groups (from children of 2 months to the elderly). 

Directions for Use
Swallow the tablet whole with a glass of water before or after the meals. It is recommended to take a tablet after food to avoid any gastrointestinal irritation. Do not chew, crush, or break it. If you cannot swallow the tablet as a whole, you may break the pill into half and take both halves one at a time. Space the doses evenly, and take it at a fixed time for better results.
Storage
Store in a cool and dry place away from sunlight
Side Effects of Dolo-650 Tablet 15's
Most of the side effects of Dolo-650 Tablet 15's do not require medical attention and gradually resolve over time. However, if the side effects are persistent, reach out to a doctor. Some common side effects of Dolo-650 Tablet 15's are liver damage, skin rashes, increased heartbeat, low platelets, and low white blood cells. Some may experience allergic skin reactions like peeling and blistering of the skin. Inform your doctor if you are allergic to paracetamol, or any other ingredients. Everyone may not experience these side-effects. 

  </p>













                    



                  


</body>

</html>








