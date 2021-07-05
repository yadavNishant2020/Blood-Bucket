<?php
session_start();

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
<?php
      $name = mysqli_real_escape_string($con , $_POST['name']) ;
      $username = mysqli_real_escape_string($con , $_POST['username']) ;
      $password = mysqli_real_escape_string($con , $_POST['password']) ;
      $confirm_password = mysqli_real_escape_string($con , $_POST['confirm_password']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpassword = password_hash($confirm_password, PASSWORD_BCRYPT);
    
    $usernamequery = " select * from registration where username = '$username' ";
    $query = mysqli_query($con , $usernamequery);
    if($query){

    
    $usernamecount =  mysqli_num_rows($query);

    if($usernamecount>0){
        echo "username alredy exist";
    }else{
        if($password == $confirm_password){
             $insertquery = "insert into registration (name, username, password, confirm_password) VALUES('$name', '$username', '$pass', '$cpassword' )";
             if(strlen(trim($_POST['password'])) < 5){
                ?>
                <script>
                alert("Password cannot be less than 5 characters");
                </script>
               <?php
             }
            else{
                
             $iquery = mysqli_query($con, $insertquery);
             if($iquery){
                ?>
                <script>
                alert("Data sucessfully inserted");
                </script>
               <?php

            }
            else{
                ?>
                 <script>
                 alert("insertion error .");
                 </script>
                <?php
            }
        }
        }else{
            echo "please match the password and current password";
        }
    }

    }
?>