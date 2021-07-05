<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content=" value="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="edit.css">
    <title>Contact Form #4</title>
  </head>

  <?php
            include 'dashconn.php';

            $id = $_GET['id'];

            $showquery = "select * from dashboard_form where id = {$id} ";
            $showdata = mysqli_query($con,$showquery);
            $res = mysqli_fetch_array($showdata);

            if(isset($_POST['submit']))                                                                                        
            {
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $bloodgroup = $_POST['bloodgroup']; 
                $state = $_POST['state'];
                $city = $_POST['city'];
                $msg = $_POST['message'];

                $updatequery = "update dashboard_form set name ='$fullname', mobile_no='$phone', email='$email',blood_group='$bloodgroup', state='$state', city='$city', problem='$msg' where id=$id";
                $cn= mysqli_query($con, $updatequery);
                if($cn){
                    ?>
                     <script>
                     alert("info Updated");
                     </script>
  
                    <?php
                    header('location: org_table.php');
                }
                else{
                    ?>
                     <script>
                     alert("Not updated .");
                     </script>
                    <?php
                }
            }
   ?>

  <body>
  <section id="orgForm">
        <div class="head-container">
            <h2>INDIVIDUAL INFORMATION FORM</h2>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="main-form">
                    <form action="#" method="post">
                        <div class="orgField">
                            <label for="orgName">
                                <span>Your Full Name:*</span>
                                <input type="text" name="fullname" value="<?php echo $res['name'] ?>" id="orgName" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgPhone">
                                <span>Your Mobile Number:*</span>
                                <input type="tel" name="phone" value="<?php echo $res['mobile_no'] ?>" id="orgPhone" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgEmail">
                                <span>Your Email Address:*</span>
                                <input type="email" name="email" value="<?php echo $res['email'] ?>" id="orgEmail" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgEmail">
                                
                            <span>Blood Group:*</span>                
                            <select class="custom-select" value="<?php echo $res['bloodgroup'] ?>" id="budget" name="bloodgroup">
  <option selected>Choose...</option>
  <option value="A+"> A+</option>
  <option value="O+">O+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="A-">A-</option>
  <option value="O-">O-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
</select>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="message" class="col-form-label">State:* </label>
                            <select class="form-control" name="state" value="<?php echo $res['state'] ?>" id="state" placeholder="Select Your State"
                                single="">
                                <option selected>--Select Your State--</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="orgField">
                            <label for="orgCity">
                                <span>City:*</span>
                                <input type="text" name="city" value="<?php echo $res['city'] ?>" id="orgCity" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgDesc">
                                <span>Any Underlying Health Condition:*</span>
                                <textarea name="message" value="<?php echo $res['problem'] ?>" id="orgDesc" placeholder="Health issues"
                                    required></textarea>
                            </label>
                        </div>
                        <div>
                            <input  id="search-btn" name="submit" type="submit" value="Submit Details">
                        </div>
                    </form>
                </div>
            </div>
            <div class="box"  id="bg-image">
                <img src="../assets/bg.png" alt="">
            </div>
        </div>
    </section>
  </body>