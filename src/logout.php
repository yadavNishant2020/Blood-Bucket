<?php
session_start();

session_destroy();

header('location:index.php');
// /*
//  * Check the authenticity of the user
//  */
// function check_auth()
// {
//    if (empty($_SESSION['logged_in']))
//    {
//       header('Location: index.php');
//       // Immediately exit and send response to the client and do not go furthur in whatever script it is part of.
//       exit();
//    }
// }

// /*
//  * Logging the user out
//  */
// function logout()
// {
//    $_SESSION['logged_in'] = null;
//    // empty($null_variable) is true but isset($null_variable) is also true so using unset too as a safeguard for further codes
//    unset($_SESSION['logged_in']);
// }
//    // Note that the script continues running since it may be a part of an ajax request and the rest handled in the client side.
?>