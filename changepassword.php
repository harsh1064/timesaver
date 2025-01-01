<?php
include("header.php");
?>
<?php
include("config.php");
if (isset($_POST['pass'])) {
	$mobile_no = $_GET['mobile_no'];
	$password = $_POST['password'];
	// $sql2 = "UPDATE `tbl_login` SET `password`='".$password."' WHERE `mobile_no`=$mobile_no";
    $sql2 = "UPDATE `tbl_register` SET `password`='".$password."' WHERE `mobile_no`=$mobile_no";
	echo $sql2;
	$result2 = mysqli_query($con, $sql2);
	if (mysqli_affected_rows($con) > 0) {
		echo "<script>alert('Your password reset successfully');</script>";
		echo "<script>window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Something went wrong');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}
}
?>

<div class="login-form"style="width:71%;margin-left:207px;height: 289px;">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Enter password</label>
                                <input type="password" name="pass"placeholder="enter new password">
                                <input type="password" name="password"placeholder="Confirm  password"style="margin-top:22px">
                    
                            </div>
                            
                           
                            
                            
                           
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="pass" style="margin-top: 37px;top:-21px">Send now</button>
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