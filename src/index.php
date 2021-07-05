<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bucket</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <p>Blood Bucket</p>
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

    <section style="background-image: url(../assets/images/3.jpg); background-size: cover;" id="home" class="home-container">
        <div class="home-box left-home">
            <h1>Welcome<br>
                to <br>
                BLOOD <br>
                BUCKET
            </h1>
        </div>

        <div class="home-box right-home">
            <form action="#" method="post">
                <div class="col-md-6 form-group">
                  <label for="message" class="col-form-label">State</label>
                  <select class="form-control" name="searchCity" id="state" placeholder="Select Your State">
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

                <select name="bg-select" id="bg-select">
                    <option value="">Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select><br><br><br>

                <button id="search-btn" type="submit" onclick="showResult()" name="submit">SEARCH</button>
            </form>
        </div>
    </section>
    <hr>

    <!-- Search Result Section Started -->
    <?php
    include 'dbcon.php';
    if (isset ($_POST['submit'])){
    $state = $_POST['searchCity'];
    $bloodgroup = $_POST['bg-select'];


    $sql = "select * from dashboard_form where state = '$state' and blood_group = '$bloodgroup' ";
    $query = mysqli_query($con, $sql);
    if ($query) {
        $num_rows = mysqli_num_rows($query);
        if ($num_rows) {
    ?>
            <section id="search-result">
                <div class="head-container">
                    <h2>Search results</h2>
                    <h2>Individual Details</h2>
                    <p>Showing search results for location <span><?php echo $state; ?></span> and blood group <span><?php echo $bloodgroup; ?></span></p>
                </div>
                <div class="body-container">
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Blood Group</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Health Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // output data of each row
                                while ($info = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $info['name']; ?></td>
                                        <td><?php echo $info['mobile_no']; ?></td>
                                        <td><?php echo $info['email']; ?></td>
                                        <td><?php echo $info['blood_group']; ?></td>
                                        <td><?php echo $info['state']; ?></td>
                                        <td><?php echo $info['city']; ?></td>\
                                        <td><?php echo $info['problem']; ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                     
    <?php
        } else {
            echo "Service not available at your location ";
        }
    }
    $ssql =" select * from org_form where state = '$state' ";
$squery = mysqli_query($con, $ssql);
if($squery)
{
$num_rows = mysqli_num_rows($squery);
if ($num_rows) 
{
    ?>
    
    <div class="head-container">
                    <h2>Organizations</h2>
                 </div>
                <div class="body-container">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Org. Name</th>
                                    <th>Tel No.</th>
                                    <th>Email</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                        

        <?php
    // output data of each row
    while($sinfo = mysqli_fetch_array($squery)) 
    {
        ?>
       
      <tbody>
        <tr>
            <td><?php echo $sinfo['org_name']; ?>
            <td><?php echo $sinfo['tel_no']; ?>
            <td><?php echo $sinfo['email']; ?>
            <td><?php echo $sinfo['state']; ?>
            <td><?php echo $sinfo['city']; ?>
            <td><?php echo $sinfo['info']; ?>



        </tr>
    </div>
    </div>
        <?php 
    }
    ?>
        </tbody>
    </table>
    </div>
    </div>      
    <hr>
     
    </section>
    </body>
        <?php
} 
else 
{
    echo "Service not available at your location ";
}
}


}
    ?>
    <!-- Search Result Section Finished -->

    <section style="background-image: url(../assets/images/2.jpg); background-size: cover;" id="benefits">
        <div class="head-container">
            <h2>Benefits of Blood Donation</h2>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="box-head">
                    <h2>
                        Reduces Risk of Cancer
                    </h2>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ipsa sit dignissimos iste provident,
                libero repellat est quisquam at repellendus necessitatibus. Minus libero eos expedita! Modi enim sed nam
                quod.
            </div>
            <div class="box">
                <div class="box-head">
                    <h2>
                        Lowers Risk of Heart Attack
                    </h2>
                </div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam id recusandae eos unde minima quam
                cumque aperiam at ex mollitia, itaque excepturi velit dolore nam, quaerat sunt rerum sed dolorum.
            </div>
            <div class="box">
                <div class="box-head">
                    <h2>
                        Helps Liver Stay Healthy
                    </h2>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tenetur, aperiam velit sapiente illo
                accusamus, doloremque ipsum debitis eius eos totam quisquam a odio fugit voluptate voluptatum dicta.
                Quas, molestias.
            </div>
            <div class="box">
                <div class="box-head">
                    <h2>
                        Helps Your Mental State
                    </h2>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tenetur, aperiam velit sapiente illo
                accusamus, doloremque ipsum debitis eius eos totam quisquam a odio fugit voluptate voluptatum dicta.
                Quas, molestias.
            </div>
        </div>
    </section>
    <hr>

    <section style="background-image: url(../assets/images/1.jpg); background-size: cover;" id="availability">
        <div class="head-container">
            <h2>
                Availability
            </h2>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/a+.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/a-.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/o.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/b-.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/o+.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/o-.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/ab+.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
            <div class="box">
                <div class="bg-img"><img src="../assets/blood-group/ab-.gif" alt=""></div>
                <div class="qty"> <span>20+</span> Donors</div>
            </div>
        </div>
    </section>
    <hr>

    <section id="team">
        <div class="head-container">
            <h2>
                Our Team
            </h2>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="pic"><img src="../assets/pics/sks.png" alt=""></div>
                <div class="info">
                    <p class="tname">Sugam Kumar Singh</p>
                    <p class="role">Full-stack Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="pic"><img src="../assets/pics/sks.png" alt=""></div>
                <div class="info">
                    <p class="tname">Sugam Kumar Singh</p>
                    <p class="role">Full-stack Developer</p>
                </div>
            </div>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="pic"><img src="../assets/pics/sks.png" alt=""></div>
                <div class="info">
                    <p class="tname">Sugam Kumar Singh</p>
                    <p class="role">Full-stack Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="pic"><img src="../assets/pics/sks.png" alt=""></div>
                <div class="info">
                    <p class="tname">Sugam Kumar Singh</p>
                    <p class="role">Full-stack Developer</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="foot">
            <p>All Rights Reserved. &copy; 2021 SUGAM KUMAR SINGH</p>
            <a href="adminlogin.php">ADMIN</a>
        </div>
    </footer>

    <script>
        var resultSection = document.getElementById("search-result");
        function showResult() {
            resultSection.style.display = "block";
            resultSection.scrollIntoView();
        }
    </script>
    

</body>