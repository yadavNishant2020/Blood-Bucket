<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
include 'dbcon.php';

    
        if(isset($_POST['signinbtn']))
        {
            $susername = mysqli_real_escape_string($con , $_POST['susername']) ;
            $spassword = mysqli_real_escape_string($con , $_POST['spassword']) ;
                  
            $user_name_search = "select * from admin where username = '$susername'";
            $query = mysqli_query($con, $user_name_search);
        
            if($query){
            $username_count = mysqli_num_rows($query);
            
            if($username_count)
            {
              $pass = mysqli_fetch_assoc($query);
        
              $db_pass= $pass['password'];
        
              $pass_decode = password_verify($spassword, $db_pass);
        
                if($pass_decode)
                {
                    echo "login successful";
                    header('location:org_table.php');
        
                }
                else
                {
                    echo " Password Incorrect ";
                }
            }
            else 
            {
                echo " Incorrect username ";
            }          
        }
    }
?>
<body>
    
    <form id="signin-form" action="#" method="POST">
                <h1>Sign in</h1><br>
                <input type="text" name="susername" placeholder="Username" /><br>
                <input type="password" name="spassword" placeholder="Password" /><br>
                <button type="submit" name="signinbtn">Sign In</button>
    </form>
</body>
</html>