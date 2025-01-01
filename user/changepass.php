<?php
   include("header.php");
   ?>

<?php
 include("config.php");
                            if(isset($_POST['submit']))
                            {
								global $pass;
								$oldp = $_POST['old'];
								$newp = $_POST['newpass'];
								$conp = $_POST['con'];
								// $sql = "select * from tbl_login where email = '$user' and status = 0";
								$sql = "select * from tbl_register where email = '$user'";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									{
										$pass = $row['password'];
										
									}
									if($pass == $oldp)
									{
										if($newp == $conp)
										{
											// $sql1 = "update tbl_login set password = '$newp' where email = '$user' and status = 0";
											$sql1 = "update tbl_register set password = '$newp' where email = '$user'";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
                                                echo "<script language='javascript'>alert('You will be logout');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
											
											
											
											$sql2 = "update tbl_register set password = '$newp' where email = '$user'";
											$result2 = mysqli_query($con,$sql2);
											if($result2)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
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
							}
						?>



   <h2 style="margin-left:648px;color: #042038"><B>Change Password</B></h2><br>
<div class="login-form" style="    width: 59%;
    margin-left: 348px;
    height: 442px">
                        <!--Login Form-->
                        <form method="post" >
                           
                            
                            <div class="form-group">
                                <label>Enter old Password</label><br>
                                <input type="password" name="old" placeholder="old Password" required style="    height: 45px;
    width: 95%">
                            </div>

                            <div class="form-group">
                                <label>Enter Your New Password</label><br>
                                <input type="password" name="newpass" placeholder=" new Password" required style="    height: 45px;
    width: 95%">
                            </div>


                            <div class="form-group">
                                <label>Confirm Password</label><br>
                                <input type="password" name="con" placeholder=" confirm Password" required style="    height: 45px;
    width: 95%">
                            </div>
                            
                            
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                <button class="theme-btn btn-style-one" type="submit" name="submit">Change password</button>
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                        </form>
                            
                    </div>
                    <!--End Login Form -->
                    
                </div>
                <?php
   include("footer.php");
   ?>