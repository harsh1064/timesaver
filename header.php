<!DOCTYPE html>
<html>


<!-- Mirrored from danslacuisinededede.com/constructo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:19:43 GMT -->
<head>
<meta charset="utf-8">
<title> TimeSaver</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/k2.ico" type="image/x-icon">
<link rel="icon" href="images/k2.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">
    
    	<!-- Header Top Two-->
    	<div class="header-top-two">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="#" style="font-size:17px"><span class="icon fa fa-home"></span>Devarshi Bunglows, Dharoi colony road, visnagar</a></li>
                            <li><a href="#" style="font-size:17px"><span class="icon fa fa-envelope"></span>timesaver119@gmail.com</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<ul class="clearfix">
                        	
                            <!--Search Box-->
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="https://danslacuisinededede.com/constructo/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                           <li><a href="#" class="advisor" style="margin-top:-9px">
                           <form method="GET" action="search.php">

 



<select name="search" id="search" class="form-control" placeholder="Search Our Product" required>
                   
<?php

global $id;
include('config.php');
$result=mysqli_query($con,"select * from tbl_category where status='0'");
while($row=mysqli_fetch_array($result))
{
$id=$row['cat_id'];
?>
<option value="<?php echo $row['cat_name'];?>" style="font-weight:bold; font-size:16px;"><?php echo $row['cat_name'];?></option>
<?php
$result1 = mysqli_query($con,"select * from tbl_service where cat_id=$id and status='0'");
while($row1=mysqli_fetch_array($result1))
{
?>
<option value="<?php echo $row1['service_name'];?>"><?php echo $row1['service_name'];?></option>
<?php
}
?>
<?php
}
?>
<input type="submit" name="submit" style="margin-left: 105px;
    margin-top: 17px">
                     &nbsp; 
                    </select>
                    
                    </form>


            </a></li>
                                                </form>
                        </ul>                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="images/timelogo.jpg" style="height:87px;margin-top:-23px;margin-left:-70px"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                    <li><a href="login.php">Login </a></li>
                                    
                                    <li><a href="about.php">About us</a></li>
                                    <!-- <li><a href="getintouch.php">Get in touch</a></li> -->
                                    <li class="dropdown"><a href="#">Category</a>
                                        <ul>
                                        <?php
?>
<?php 
include("config.php");
$sql="select * from tbl_category where status=0";

$cat=mysqli_query($con,$sql);

while($c=mysqli_fetch_array($cat))
{
	?>
    <li>
    <a itemprop="url" href="allservice.php?cat_id=<?php echo $c['cat_id'];
	?>">



    
	<?php echo $c['cat_name'];?></a></i></li> 
    
                                                            

<?php
}
?>
                                        </ul>
                                    </li>
                                    <li><a href="deals.php">Deals </a></li>
                                <!-- <li><a href="partener.php"> Work with us </a></li> -->
                                    <li><a href="contact.php">Contact us</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Outer Box-->
                        <div class="outer-box">
                            <div class="cart-btn">
                            	
                   
                            </div>
                        </div>
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images/timesmalllogo.jpg" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
                                <li><a href="login.php">Login </a></li>
                                
                                    
                                </li>
                                <li><a href="about.php">About us</a></li>
                                <!-- <li><a href="getintouch.php">Get in touch </a></li> -->
                                <li class="dropdown"><a href="#">Category</a>
                                    <ul>
                                    <?php
?>
<?php 
include("config.php");
$sql="select * from tbl_category where status=0";

$cat=mysqli_query($con,$sql);

while($c=mysqli_fetch_array($cat))
{
	?>
    <li>
    <a itemprop="url" href="allservice.php?cat_id=<?php echo $c['cat_id'];
	?>">



    
	<?php echo $c['cat_name'];?></a></i></li> 
    
                                                            

<?php
}
?> 
                                    </ul>
                                </li>
                                <li><a href="deals.php">Deals </a></li>
                                <!-- <li><a href="partener.php">Work with us </a></li> -->
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>

    <script src="js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>


<!-- Mirrored from danslacuisinededede.com/constructo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:19:43 GMT -->
</html>
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
