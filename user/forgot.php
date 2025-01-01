<?php
include("header.php");
?>
<?php

include("config.php");
if (isset($_POST['submit'])) {
	$mobile_no = $_POST['mobile_no'];
	//$sql = "select * from tb_login where mobile_no = '$mobile_no'";
	$sql = "select * from tb_register where mobile_no = '$mobile_no'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);
	if ($count > 0) {

		/**
		 * Send OTP
		 */
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://2factor.in/API/V1/036b4859-2c80-11eb-83d4-0200cd936042/SMS/' . $mobile_no . '/AUTOGEN');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
		$response = curl_exec($ch);
		$result = json_decode($response);
		curl_close($ch); // Close the connection
		if ($result->Status == "Success") {
			echo "<script language='javascript'>alert('OTP SENT TO YOUR MOBILE NUMBER')</script>";
		} else {
			echo "<script language='javascript'>alert('INTERNAL SERVER ERROR')</script>";
			return;
		}

		echo "<script language='javascript'>window.location.href='verify1.php?mobile_no=" . $mobile_no . "&token=" . $result->Details . "';</script>";
	} else {
		echo "<script language='javascript'>alert('Phone number is not exist!');</script>";
		echo "<script language='javascript'>window.location.href='index.php';</script>";
	}
}
?>

<div class="login-form"style="width:71%;margin-left:207px;height: 289px;">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Mobile number</label>
                                <input type="text" name="mobile_no" id="mobile_no" placeholder="enter your mobile no">
					
                    
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