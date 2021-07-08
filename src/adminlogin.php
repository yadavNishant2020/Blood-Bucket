<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/adminLogin.css">
</head>
<?php
include 'dbcon.php';


if (isset($_POST['signinbtn'])) {
    $susername = mysqli_real_escape_string($con, $_POST['susername']);
    $spassword = mysqli_real_escape_string($con, $_POST['spassword']);

    $user_name_search = "select * from admin where username = '$susername'";
    $query = mysqli_query($con, $user_name_search);

    if ($query) {
        $username_count = mysqli_num_rows($query);

        if ($username_count) {
            $pass = mysqli_fetch_assoc($query);

            $db_pass = $pass['password'];

            $pass_decode = password_verify($spassword, $db_pass);

            if ($pass_decode) {
                echo "login successful";
                header('location:org_table.php');
            } else {
                echo " Password Incorrect ";
            }
        } else {
            echo " Incorrect username ";
        }
    }
}
?>

<body style="background-image: url(../assets/images/admin.jpeg); background-size: cover;">
<header>
        <div class="navbar">
            <div class="logo">
                <p><a href="../src/index.php">Blood Bucket</a></p>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#availability">Availability</a></li>
                <li><a href="#team">Our Team</a></li>
            </ul>
            <a href="sign_signup.php"><button id="main-login-Btn">SIGN UP</button></a>
        </div>
    </header>

    <form id="signin-form" action="#" method="POST">
        <div class="top-heading">
            <h1>Admin Login</h1><br>
        </div>
        <input type="text" name="susername" placeholder="Username" /><br>
        <input type="password" name="spassword" placeholder="Password" /><br>
        <button id="adminBtn" type="submit" name="signinbtn">LOG IN</button>
    </form>

    <footer>
    <div class="foot">
        <p>All Rights Reserved. &copy; 2021 Blood Bucket <a href="adminlogin.php">admin</a></p>
        
    </div>
</footer>
</body>

</html>