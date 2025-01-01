<?php
ob_start();
session_start();
?>
<?php
include("header.php");
?>
<?php

if (isset($_POST['submit'])) {
	$token = $_GET['token'];
	$mobile_no = $_GET['mobile_no'];
	$user_otp = $_POST['otp'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://2factor.in/API/V1/036b4859-2c80-11eb-83d4-0200cd936042/SMS/VERIFY/' . $token . '/' . $user_otp);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	$response = curl_exec($ch);
	$result = json_decode($response);
	curl_close($ch); // Close the connection
	if ($result->Status == "Success") {
		echo "<script language='javascript'>alert(' " . $result->Details . " ')</script>";
		echo "<script>window.location.href='changepassword.php?mobile_no=".$mobile_no."';</script>";
	} else {
		echo "<script language='javascript'>alert(' " . $result->Details . " ')</script>";
			echo "<script language='javascript'>window.location.href='index.php';</script>";
	}
}
?>

<div class="login-form"style="width:71%;margin-left:207px;height: 289px;">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>OTP</label>
                                <input type="text" id="otp"name="otp"placeholder="enter your OTP">
					
                    
                            </div>
                            
                           
                            
                            
                           
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="margin-top: 37px;top:2px">Send now</button>
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