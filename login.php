<?php
session_start();
ob_start();
?>

<?php
include("header.php");
?>


<?php
include("config.php");
if(isset($_POST['submit']))
{
    

    $sql=("SELECT `mobile_no` FROM `tbl_register` WHERE `mobile_no`='".$_POST['mobile_no']."'");
    $result=mysqli_query($con,$sql);
    if(mysqli_affected_rows($con)>0)
    {
    
        $_SESSION['error']="Mobile Number Already Exist";
        $error=$_SESSION['error'];
        echo "<script language='javascript'>alert(".$error.")</script>";
        
        
    }
    else
    {
        // $otp=rand(0000,9999);
        // $_SESSION['otp']=$otp;
        
    
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $username=$_POST['username'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $image=$_FILES['image']['name'];
        $mobile_no=$_POST['mobile_no'];
        
        
        
    
    $sql1=("INSERT INTO `tbl_register`(`email`,`password`, `username`, `city`, 
    `address`,`gender`,`image`,`mobile_no`,`otp`,`status`) VALUES ('".$_POST['email']."',
    '".$_POST['password']."','".$_POST['username']."',
        '".$_POST['city']."','".$_POST['address']."','".$_POST['gender']."',
        '$image','".$_POST['mobile_no']."','',0)");
        
        
        $result1=mysqli_query($con,$sql1);
        
        $sql2=("INSERT INTO `tbl_login`(`email`, `password`,`mobile_no`, `type`,`status`) 
        VALUES ('".$_POST['email']."','".$_POST['password']."','".$_POST['mobile_no']."','user',1)");
        $result2=mysqli_query($con,$sql2);
        if(mysqli_affected_rows($con)>0)
        
            
        
        if(mysqli_affected_rows($con)>0)
        {
            
 //$msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=3lXuMsaoZtCA7BxYvd8TmNz5P0fhVjGyDgwKrRJ1eFLiSpQUbExfrLciARKC4p1eBNJyOjMQ5tU7FDqW
    //&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['mobile_no']);
    
            //echo "<script>alert('we have send OTP to your mobile number,pl enter that to verify your account');</script>";
            echo "<script>alert('registered successfully.');</script>";
            echo "<script>window.location.href='index.php';</script>";
            
        }
        else
        {
            echo "<script>alert('Error creating account');</script>";
            echo "<script>window.location.href='index.php';</script>";
            
            
    }
    }}
    ?>	
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Registration</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: 7285075147</div>
        </div>
    </section>
    <!--End Page Title-->












<?php
//include('config.php');
	if(isset($_POST['submit50']))
	{
		
		$user = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$sql = "select * from tbl_register where (email = '$user' OR mobile_no='$user') and password = '$pass' 
        and `is_deleted` = 0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($result)) {
                $type= $row['type'];
                $status= $row['status'];
			}

            if($status == 0){
                echo "<script language='javascript'>alert('You are deactivated, please administrator.');</script>";	
            } else {
                if(($type=="admin")||($type=='Admin'))
                {
                    $_SESSION['user'] = $user;								
                    echo "<script language='javascript'>window.location.href='admin/index.php';</script>";
                }
                elseif(($type=="user")||($type=='User'))
                {
                    $_SESSION['user'] = $user;
                    echo "<script language='javascript'>window.location.href='user/index.php';</script>";
                }
            }
        } else {
	        echo "<script language='javascript'>alert('Enter correct Email-Id  or Password.');</script>";	
		}
		}
	?>
    
    <!--Login Section-->
    <section class="login-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>Login</h2>
                    
                    <!-- Login Form -->


                    <script language="Javascript" type="text/javascript">

function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode == 32))
            return true;
        else
            return false;

    }
    catch (err) {
        alert(err.Description);
        
    }
}

</script>






                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Mobile no or Email Address</label>
                                     <input type="text" name="username"placeholder="mobile no or email" required>
					
                    
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="Password" required>
                            </div>

                            
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="form-group check-box">
                                        <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Remember me</label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                     <button class="theme-btn btn-style-one" type="submit" name="submit50">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <a href="forgot.php" class="psw">Lost your password?</a>
                            </div>
                            
                        </form>
                            
                    </div>
                    <!--End Login Form -->
                    
                </div>
                
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>Register</h2>
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <!--Login Form-->
                        <form method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Enter your Email </label>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <!-- <input type="email" name="email" placeholder="Your Email" pattern=".+@gmail\.com" required> -->
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="text" name="password" placeholder="Password"  required>
                            </div>


                            <div class="form-group">
                                <label>Enter Your username</label>
                                <input type="text" name="username"placeholder="enter username(input only alphabets)" onKeyPress="return onlyAlphabets(event,this);" required>
                            </div>

                              <div class="form-group">
                                <label>select your city/village</label>
                                <select name="city_id" id="f-name" class="form-control"style="height:45px" required>
   <option value="0" >Select city/village </option>
            <?php
include("config.php");

$sql1 = "select * from tbl_city where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{
echo "<option value = '$row[0]'>$row[1]</option>";
}

?>
            </select>
                            </div>
                            <div class="form-group">
                                <label>Enter Your address</label>
                                <input type="text" name="address" placeholder="address" required>
                            </div>

                            <div class="form-group">
                                <label>Select your gender</label>
                        <br>
                                <select name="gender" style="width:100%;height:37px" >
   
                    <option value="select gender">select gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                            </div>


                            <?php
 if(isset($_FILES['image']))
 {
	 $file_name=$_FILES['image']['name'];
	 $file_tmp=$_FILES['image']['tmp_name'];
	 $file_size=$_FILES['image']['size'];
     if($_FILES['image']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'../profileimage/'.$file_name))
		 { 
			
		 }}
 }
 ?>



                            <div class="form-group">
                                <label>image</label>
                                <input type="file" name="image" >
                            </div>

                            <script type="text/javascript">
      var specialKeys = new Array();
     specialKeys.push(8); //
     function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
     var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
	  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                    



                            <div class="form-group">
                                <label>Enter Your Mobile No</label>
                                <input type="text" name="mobile_no" placeholder="enter mobile number(input only 0-9 digits)" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                            </div>
                            
                           	<div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit"
                                 name="submit">Register</button>
                            </div>
                            
                        </form>
                            
                    </div>
                    <!--End Register Form -->
                </div>
                
            </div>
        </div>
    </section>
    <!--End Login Section-->
    
    <!--Call To Action Two-->
    
    <!--End Call To Action Two-->
    
   <?php
   include("footer.php");
   ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate aqua-color" data-theme-file="css/color-themes/aqua-theme.css"></span>
            <span class="palate pink-color" data-theme-file="css/color-themes/pink-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate lime-color" data-theme-file="css/color-themes/lime-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-theme.css"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div>
<!-- /.End Of Color Palate -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from html.efforttech.com/html/konstructo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 09:18:44 GMT -->

<!-- Mirrored from danslacuisinededede.com/constructo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:20:18 GMT -->
</html>