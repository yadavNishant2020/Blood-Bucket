<?php

  
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $msg = $_POST['message'];
    



    
    $insertquery = "insert into org_form(org_name, tel_no, email, state, city, info) VALUES('$fullname', '$phone', '$email', '$state','$city', '$msg')";
    $cn= mysqli_query($con, $insertquery);
    if($cn){
        ?>
     <script>
     alert("form submition sucessful.");
    
     </script>
     
    <?php
     header('location: index.php');
    }else{
    ?>
    <script>
    alert("query not sucessful.");
    </script>
    
   <?php
  
  
}


?>