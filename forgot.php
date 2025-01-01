<?php
include("header.php");
?>

<?php

if(isset($_POST['submit']))
			{
	include('config.php');
$email = $_POST['email'];
//$sql = "select * from tbl_login where email = '$email' and status = 0";
$sql = "select * from tbl_register where email = '$email'";
			$result = mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				if($count > 0)
				{
		while($row = mysqli_fetch_array($result))
					  {
				$pass= $row['password'];
				}
			
							if($pass)
										{
											echo "<script language='javascript'>window.location.href='resetpass.php?email=".$email."';</script>";
										}
										
									}
									else
									{
										echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
									}
								}
							?>  





                    
                    

<h2><center>Forgot Password</center></h2>
<div class="login-form"style="width:71%;margin-left:207px;height: 289px;">

                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" placeholder="enter your email ">
					
                    
                            </div>
                            
                           
                            
                            
                           
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="margin-top: 37px;top:2px">submit</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </form>
                            
                    </div></div></div></div>
                    <!--End Login Form -->
                    
                </div>
                <br>
                <br>
                            
                    
                    <?php
                    include("footer.php");
                    ?>
                    </div>