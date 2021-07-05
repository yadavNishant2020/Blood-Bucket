<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

  *,
  *:before,
  *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  h1 {
    font-size: 3.5rem;
    text-align: center;
  }

  body {
    background: #105469;
    font-family: 'Open Sans', sans-serif;
  }

  table {
    background: #012B39;
    border-radius: 0.25em;
    border-collapse: collapse;
    margin: 1em;
    margin-bottom: 0;
    margin-top: 0;

  }

  th {
    border-bottom: 1px solid #364043;
    color: #E2B842;
    font-size: 1.5rem;
    font-weight: 600;
    padding: 0.5em 1em;
    text-align: left;
  }

  td {
    color: #fff;
    font-weight: 400;
    padding: 0.65em 1em;
  }

  tbody tr {
    transition: background 0.25s ease;
  }

  tbody tr:hover {
    background: #014055;
  }
</style>

<?php
include 'dbcon.php';

$state = "Uttar Pradesh"; //$_POST['searchCity'];
$bloodgroup = "A+"; //$_POST['bg-select'];

$sql = "select * from dashboard_form where state = '$state' and blood_group = '$bloodgroup' ";
$query = mysqli_query($con, $sql);
if ($query) {
  $num_rows = mysqli_num_rows($query);
  if ($num_rows) {
?>

    <body>
      <h1>Blood Donor's </h1>
      <table>
            <thead>

              <tr>
                <th>NAME
                <th>Mobile_No
                <th>Email
                <th>Blood_group
                <th>State
                <th>City
              </tr>
            </thead>



                <tbody>
                  <?php
                  // output data of each row
                  while ($info = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td><?php echo $info['name']; ?>
                      <td><?php echo $info['mobile_no']; ?>
                      <td><?php echo $info['email']; ?>
                      <td><?php echo $info['blood_group']; ?>
                      <td><?php echo $info['state']; ?>
                      <td><?php echo $info['city']; ?>
                    </tr>
                  <?php
                  }
                  ?>

                </tbody>
              </table>
    </body>
<?php
  } else {
    echo "Service not available at your location ";
  }
}
?>

<!-- follow me template -->
<div class="made-with-love">
  Made with
  <i>♥</i> by
  Our Team</a>
</div>