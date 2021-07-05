<?php 
$server = "localhost";
$user = "root";
$password = "";
$db = "dashboard";

$con = mysqli_connect($server,$user,$password,$db );

if($con){
    ?>
     <script>
     alert("Connection sucessful.");
     </script>
     
    <?php
}
else{
    ?>
     <script>
     alert("No Connection .");
     </script>
    <?php
}

?>