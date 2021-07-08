<head>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .table {
            font-size: 1rem;
        }
        .table tr th, .table tr td {
    font-size: 1.2rem;
    padding: 4px 8px;
}
    </style>
</head>

<?php
include 'dashconn.php';


$sql = " select * from org_form ";
$query = mysqli_query($con, $sql);
if ($query) {
    $num_rows = mysqli_num_rows($query);
    if ($num_rows) {
?>

        <body style="background-image: url(../assets/images/editbg.jpg); background-size: cover;">
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
                    <a href="index.php"><button id="main-login-Btn">SIGN OUT</button></a>
                </div>
            </header>
            <section id="org">
                <div class="head-container">
                    <h2 style="padding-top: 68px;">Organizations</h2>
                </div>
                <div class="body-container">
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Mobile_No</th>
                                    <th>Email</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Message</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                // output data of each row
                                while ($info = mysqli_fetch_array($query)) {
                                ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $info['id']; ?></td>
                                    <td><?php echo $info['org_name']; ?></td>
                                    <td><?php echo $info['tel_no']; ?></td>
                                    <td><?php echo $info['email']; ?></td>
                                    <td><?php echo $info['state']; ?></td>
                                    <td><?php echo $info['city']; ?></td>
                                    <td><?php echo $info['info']; ?></td>
                                    <td><a href="edit.php?id=<?php echo $info['id']; ?>">Edit</a></td>
                                    <td><a href="delete.php?id=<?php echo $info['id']; ?>">Delete</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        <?php
    } else {
        echo "Service not available at your location ";
    }
}

$sql1 = " select * from dashboard_form ";
$query1 = mysqli_query($con, $sql1);
if ($query1) {
    $num_rows = mysqli_num_rows($query1);
    if ($num_rows) {
        ?>
            <section id="ind">
                <div class="head-container">
                    <h2>Individual</h2>
                </div>
                <div class="body-container">
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Blood Group</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // output data of each row
                                while ($info1 = mysqli_fetch_array($query1)) {
                                ?>
                                    <tr>
                                        <td><?php echo $info1['id']; ?></td>
                                        <td><?php echo $info1['name']; ?></td>
                                        <td><?php echo $info1['mobile_no']; ?></td>
                                        <td><?php echo $info1['email']; ?></td>
                                        <td><?php echo $info1['blood_group']; ?></td>
                                        <td><?php echo $info1['state']; ?></td>
                                        <td><?php echo $info1['city']; ?></td>
                                        <td><a href="edit_i.php?id=<?php echo $info1['id']; ?>">Edit</a></td>
                                        <td><a href="delete_i.php?id=<?php echo $info1['id']; ?>">Delete</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
    <?php
    } else {
        echo "Service not available at your location ";
    }
}
    ?>
    <footer>
        <div class="foot">
            <p>All Rights Reserved. &copy; 2021 Blood Bucket <a href="adminlogin.php">admin</a></p>

        </div>
    </footer>