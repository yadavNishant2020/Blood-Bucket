<?php

    
include 'dashconn.php';

if(isset($_POST['submit'])){
  

  
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bloodgroup = $_POST['bloodgroup'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $msg = $_POST['message'];
    


    
    $insertquery = "insert into dashboard_form(name, mobile_no, email, blood_group, state, city, problem) VALUES('$fullname', '$phone', '$email', '$bloodgroup', '$state','$city', '$msg')";
     $var=mysqli_query($con, $insertquery);
    if($var){
    ?>
    <script>
    alert("var success");
    </script>
    <?php
    }else{
      ?>
      <script>
    alert("var success");
    </script>
    <?php
    }
  }else{
    ?>
    <script>
    alert("queryyyyyyyyyyyyyyyyyy success");
    </script>
    <?php
  }
  session_destroy();
  

  header('location:index.php');

?>