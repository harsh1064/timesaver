<?php
include("header.php");
?>

<?php
include("config.php");



if(isset($_POST['submit']))
{
	$mobile_no=$_GET['mobile_no'];
	
$user_otp=$_POST['otp'];
$sql="SELECT `otp` FROM `tbl_register` WHERE `mobile_no`=$mobile_no";


list($otp)=mysqli_fetch_array(mysqli_query($con,$sql));
if($otp==$user_otp)
{
	$sql2="UPDATE `tbl_register` SET `status`=0 WHERE `mobile_no`=$mobile_no";
	
	$result2=mysqli_query($con,$sql2);
	
	
	
	$sql3="UPDATE `tbl_login` SET `status`=0 WHERE status=1";
	
	$result3=mysqli_query($con,$sql3);
	
	
	
	
	if(mysqli_affected_rows($con)>0)
	{
		
		echo "<script>alert('your account created successfully..you can now login to your acocount..');</script>";
		echo "<script>window.location.href='index.php';</script>";
		
		
	}
	else
	{
		
		echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify.php';</script>";
		
	}	
		
}
else
{
	echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify.php';</script>";
}
}
?>




    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Verify</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Verify</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us:+917285075147</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Login Section-->
    <section class="login-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>Verify</h2>
                    
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" >
                            
                            
                            <div class="form-group">
                                <label>Enter Your OTP</label>
                                <input type="password" name="otp" placeholder="OTP" required>
                            </div>

                
                                      
                            
                                
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit">SEND</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </form>
                            
                    </div>
                    <!--End Login Form -->
                    
                </div>
                
                    <!--End Register Form -->
                </div>
                
            </div>
        </div>
    </section>
    <!--End Login Section-->
    
    <!--Call To Action Two-->
    <section class="call-to-action-section-two" style="background-image:url(images/background/7.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-7 col-sm-12 col-xs-12">
                	<h2><span class="theme_color">ON Demand</span> service</h2>
                    <div class="text"></div>
                </div>
                <div class="btn-column col-md-5 col-sm-12 col-xs-12">
                	<div class="number">+917285075147 <span class="theme_color"> or </span> <a href="contact.html" class="theme-btn btn-style-five">Contact Us</a> </div>
                </div>
                
            </div>
        </div>
    </section>
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