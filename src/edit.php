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

            $showquery = "select * from org_form where id = {$id1} ";
            $showdata = mysqli_query($con,$showquery);
            $res = mysqli_fetch_array($showdata);

            if(isset($_POST['submit']))
            {
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];  
                $state = $_POST['state'];
                $city = $_POST['city'];
                $msg = $_POST['message'];

                $updatequery = "update org_form set org_name ='$fullname', tel_no='$phone', email='$email', state='$state', city='$city', info='$msg' where id=$id1";
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
  <h1> Organiztion Information Form
        <small>Please fill all the details mentioned below.</small>
      </h1>
    <div id="contact-form">

             <form method="POST" action="#">

            <div>
                <label for="name">
                  <span class="required">Oranization Name: *</span> 
                  <input type="text" id="name" name="fullname" value="<?php echo $res['org_name']; ?>" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
                </label> 
            </div>
            <div>
                <label for="phone">
                  <span class="required">Telephone No.: *</span>
                  <input type="tel" id="phone" name="phone" value="<?php echo $res['tel_no']; ?>" placeholder="Your Mobile Number" tabindex="2" required="required" />
                </label>  
            </div>
            <div>
                <label for="email">
                  <span class="required">Email: *</span>
                  <input type="email" id="email" name="email" value="<?php echo $res['email']; ?>" placeholder="Your Email" tabindex="2" required="required" />
                </label>  
            </div>
            
            <div>             
                <label for="message" class="col-form-label">State</label>
                <select class="form-control" name="state" value="<?php echo $res['state']; ?>" id="state" placeholder="Select Your State" single="" >
                  <option selected>Select</option>
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
            <div>
                <label for="city">
                  <span class="required">City: *</span>
                  <input type="city" id="email" name="city" value="<?php echo $res['city']; ?>" placeholder="Your city" tabindex="2" required="required" />
                </label>  
            </div>
            <div>             
                <label for="message">
                  <span class="required">Information regarding organiztion: *</span> 
                  <textarea id="message" name="message" value="<?php echo $res['info']; ?>" placeholder="Please Describe in detail." tabindex="5" required="required"></textarea> 
                </label>  
            </div>

            <div>              
                <button name="submit" type="submit" id="submit">Update Request</button> 
            </div>
            
             </form>
      
        </div>
  
  </body>