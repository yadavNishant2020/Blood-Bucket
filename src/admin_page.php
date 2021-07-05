<?php
include 'dashconn.php';


$sql =" select * from dashboard_form";


$query = mysqli_query($con, $sql);


if($query)
{
    $num_rows = mysqli_num_rows($query);
    if ($num_rows) 
    {
        ?>
        <style>
            body{
                background-color:  rgb(112, 218, 26);
            }
            table,tr,td,th{
                border: 2px solid black;
                border-collapse: separate;
                padding: 10px;
                border-spacing: 5px;
                text-align: center;
            }
            tr,td,th{
                background-color: teal;
            }
        </style>
        
        <body>     
        <table bgcolor='brown' align='center'> 
            <tbody>
            <tr>
                <th colspan="7"><h1 align="center" style="color: rgb(29, 28, 28);">USER INFORMATION</h1></th>
            </tr>
            <tr>
                <th>NAME</th>
                <th>Mobile_No</th>
                <th>Email</th>
                <th>Blood_group</th>
                <th>State</th>
                <th>City</th>
                <th>Date_Time</th>
            </tr>
            <?php
        // output data of each row
        while($info = mysqli_fetch_array($query)) 
        {
            ?>
            <tr>
                <td><?php echo $info['name']; ?></td>
                <td><?php echo $info['mobile_no']; ?></td>
                <td><?php echo $info['email']; ?></td>
                <td><?php echo $info['blood_group']; ?></td>
                <td><?php echo $info['state']; ?></td>
                <td><?php echo $info['city']; ?></td>
                <td><?php echo $info['date_and_time']; ?></td><br>
            </tr>
            <?php 
        }
        ?>
            </tbody>
        </table>
        <?php
    }
}
else
{
    echo 'query not working';
}


include 'org_con.php';
$sql1 =" select * from org_form";
$query1 = mysqli_query($con, $sql1);
if($query1)
{

    $num_rows1 = mysqli_num_rows($query1);
    if($num_rows1)
    {
        ?>
            <table bgcolor='brown' align='center'> 
            <tbody>
            <tr>
                <th colspan="7"><h1 align="center" style="color: rgb(29, 28, 28);">ORGANISATION INFORMATION</h1></th>
            </tr>
            <tr>
                <th>Org Name</th>
                <th>Mobile_No</th>
                <th>Email</th>
                <th>State</th>
                <th>City</th>
                <th>Info</th>
                <th>Date_Time</th>
            </tr>
            <?php
        // output data of each row
        while($info1 = mysqli_fetch_array($query1)) 
        {
            ?>
            <tr>
                <td><?php echo $info1['org_name']; ?></td>
                <td><?php echo $info1['tel_no']; ?></td>
                <td><?php echo $info1['email']; ?></td>
                <td><?php echo $info1['state']; ?></td>
                <td><?php echo $info1['city']; ?></td>
                <td><?php echo $info1['info']; ?></td>
                <td><?php echo $info1['date_time']; ?></td><br>
            </tr>
            <?php 
        }
        ?>
            </tbody>
        </table>
        </body>
        <?php
    }        
}
else
{
    echo 'query 1 not working';
}
?>