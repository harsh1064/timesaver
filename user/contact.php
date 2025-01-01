
<?php
include("header.php");
?>

<?php
include("config.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


    $sql="insert into tbl_contact(name,email,subject,phone,message)
    value('$name','$email','$subject','$phone','$message')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "record inserted";
}
}
?>

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Contact Us</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us:+9172850475147</div>
        </div>
    </section>
    <!--End Page Title-->
    
   <!--Map Section-->
   <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1520&amp;height=500&amp;hl=en&amp;q=devarshi bunglose,dharoi colony&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:1520px;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:1520px;height:500px;}.gmap_iframe {width:1520px!important;height:500px!important;}</style></div>
    <!--End Map Section-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <h2><span class="theme_color">Get</span> in Touch</h2>
            <div class="text">You can talk to our online representative at any time. Please Fill up below instant messaging programs. <br> Please be patient, We will get back to you. </div>
            <div class="row clearfix">
            	<div class="form-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">


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



                    	
                        <!--Contact Form-->
                        <div class="contact-form style-two">
                            <form method="post" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="name" placeholder="enter name(input only alphabets)" onKeyPress="return onlyAlphabets(event,this);" required>
                            
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject" required>
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
                    




                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="phone" placeholder="enter mo number(input only 0-9 digits)" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <textarea name="message" placeholder="Your Massage"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <button type="submit" name="submit" class="theme-btn btn-style-one">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->



        




                        
                    </div>
                </div>
                <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	
                    <ul class="list-style-two">
                        <li><span class="icon flaticon-home-1"></span><strong>devarshi Bunglows</strong>dharoi colony, Visnagar </li>
                        <li><span class="icon flaticon-envelope-1"></span><strong>Send your mail at</strong>timesaver119@gmail.com</li>
                        <li><span class="icon flaticon-technology-2"></span><strong>Have Any Question</strong>+917285075147</li>
                        <li><span class="icon flaticon-clock-1"></span><strong>Working Hours</strong>Mon-Sat:10.00am to 4.00pm</li>
                    </ul>
                    
                </div>
            </div>
        </div>


  


    </section>
    <!--End Contact Section-->
    
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
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

<!--End Google Map APi-->
<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>



<!-- Mirrored from danslacuisinededede.com/constructo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:19:43 GMT -->
</html>