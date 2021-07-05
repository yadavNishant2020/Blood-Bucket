<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="edit.css">
    <title>Contact Form #4</title>
  </head>

  <?php
            include 'dashconn.php';

            $id1 = $_GET['id'];

            $updatequery = "delete from org_form where id=$id1";
            $cn= mysqli_query($con, $updatequery);
            if($cn){
                ?>
                 <script>
                 alert("Deleted Successfully");
                 </script>
                <?php
                header('location: org_table.php');
            }
            else{
                ?>
                 <script>
                 alert("Operation Not Completed .");
                 </script>
                <?php
            }

?>