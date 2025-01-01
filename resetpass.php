
<?php
include("header.php");

include("config.php");

?>

 <section style="background-image:url('pic/breadcrumbs/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          <div class="text-left breadcrumbs-item"><a href="index.php"></a><i>/</i><a href="" class="last"><span></span> </a>
            <h2 style="    margin-left: 425px"><span>Reset</span> Password</h2>
          </div>
        </div>
      </section>

 <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10"></h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          <div class="review-content pattern relative">
          <div class="row">
          <h5 class="trans-uppercase mb-10" style="color:#444444;text-align:center;margin-bottom:30px;"> <span style="color:#ffc107;
          text-transform:none;"></span></h5>
          </div>
            <!--<div class="row">
              <div class="col-md-5 mb-md-30 mb-xs-0">
                <div class="review-total"><img src="pic/blog/120x120.jpg" data-at2x="pic/blog/120x120@2x.jpg" alt>
                  <div class="review-total-content">
                    <h6></h6>
                    <div class="stars stars-4"></div>
                    <ul class="icon">
                      <li>Istanbul, Turkey<i class="flaticon-suntour-map"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="review-marks clearfix mb-30">
                  <ul>
                    <li>Cleanliness
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Location
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Staff
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Free Wi-Fi
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                  <ul>
                    <li>Comfort
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Facilities
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Value for money
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>-->
            <div class="login-form"style="width:71%;margin-left:207px;height: 289px;">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Enter new password</label>
                                <input type="password" name="newpass"placeholder="enter new password">
                                
                    
                            </div>
                            
                           
                            
                            
                           
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="margin-top: 37px;top:-21px">Send now</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </form>
                            
                    </div></div></div></div>
          </div>
			<?php
				include("config.php");
			?>
	          <?php
                            if(isset($_POST['submit']))
                            {
								global $email;
								global $pass;
								
								$email=$_GET['email'];
								
								$newp = $_POST['newpass'];
								
								// $sql = "select * from tbl_login where email='$email' and type='user' and status = 0";
                $sql = "select * from tbl_register where email='$email' and type='user'";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									
										if($newp)
										{
											// $sql1 = "update tbl_login set password = '$newp' where email='$email' and type = 'user' and status = 0";
                      $sql1 = "update tbl_register set password = '$newp' where email='$email' and type = 'user'";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script>window.location.href='index.php';</script>";
												// $sql2 = "select * from tbl_login where email='$email' and type = 'user' and status=0";
                        $sql2 = "select * from tbl_register where email='$email' and type = 'user'";
												$result2 = mysqli_query($con,$sql2);
												$count2 = mysqli_num_rows($result2);
												if($count2 > 0)
												{
													while($row2 = mysqli_fetch_array($result2))
													{
														$passnew= $row2['password'];
													}
													include ("class.phpmailer.php"); // include the class name
													$mail = new PHPMailer(); // create a new object
													$mail->IsSMTP(); // enable SMTP
													$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
													$mail->SMTPAuth = true; // authentication enabled
													$mail->SMTPSecure = 'tls';
													$mail->Host = 'smtp.gmail.com';
						
						
													$mail->Port = 587;
													$mail->IsHTML(true);
													$mail->Username = "exploreindiaholiday2017@gmail.com";
													$mail->Password = "indiaholiday123";
													$mail->SetFrom("exploreindiaholiday2017@gmail.com");
													$mail->Sender= "exploreindiaholiday2017@gmail.com";

													$mail->Subject = "Reset Password Details";
													$mail->Body = "<html>
													<body>
													<br> Dear User <br> <br> 
													You have requested to reset the password for login. So according to your requirement your Password is reset successfully and your password is $passnew. <br> 
													Kindly requsting to you to use this details for further login. <br> <br> 
													Thank you for Contacting us. <br>Explore India Holiday Team.<br>
													</body>
													</html>";
													$mail->AddAddress($email);
													if(!$mail->Send())
													{
														echo "<script language='javascript'>alert('Error');</script>";
													}
													else
													{
														echo "<script language='javascript'>alert('Mail has been sent');</script>";
														echo "<script language='javascript'>window.location.href='index.php';</script>";
													}
												}
											}
										}
										else
										{
											echo "<script language='javascript'>alert('please enter same password is not match');</script>";
										}
									}
									else
									{
										echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
									}
								
							}
						?>
          </div>
          <br /><br />


<?php
include("footer.php");



?>