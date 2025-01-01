<?php
include("header.php");
?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>All services</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>All services</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +917285075147</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="our-shop">
                        <!--Sort By-->
                        
                        
                        <div class="row clearfix">
</div>
                        <?php    
	
	include("config.php");
					$sql = "select * from tbl_service where status =0 and cat_id='".$_REQUEST['cat_id']."' ";
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
						$Path="serviceimage/".$row['image'];
			?>      
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">


                      


                                <div class="inner-box">
                                    <div class="image">
                                    <a  href="serviceinfo.php?service_id=
<?php echo $row['service_id'];?>" >
                                    <?php echo "<img  alt='Groovy Apparel' src='../admin/serviceimage/$row[7]'style='height:300px;width:300px;'>" ?>
                                        
                                    
                                    
                                    
                                    <div class="overlay-box">
                                    <h3><a  href="serviceinfo.php?service_id=
<?php echo $row['service_id'];?>" >
<div class="price">Discount:<?php echo $row['discount'];?>%</div></a>


                                            <ul class="cart-option">
                                              

                     </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">

     <h3><a  href="serviceinfo.php?service_id=
<?php echo $row['service_id'];?>" >


<?php echo $row['service_name'];?></a></h3>
                                        <a  href="serviceinfo.php?service_id=
<?php echo $row['service_id'];?>" >
                                        <div class="price">Rs.<?php echo $row['price'];?></div>                                    
                             <div class="price">Discount:<?php echo $row['discount'];?>%</div>
                                   
                                   
                                 </div>




                                 <div class="pull-center">
                                    <div class="form-group no-margin">
                                    <a  href="serviceinfo.php?service_id=
<?php echo $row['service_id'];?>" >
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form" style="margin-left:13%;margin-top:10%">Read more</button>
                                    </div>
                                </div>
                            

                                    
                                </div>
                            </div>
                            


                            <?php
                    }
                    ?>
                           
                            </div>
</div></div>
</div>
					</aside>
                </div>
                
            </div>
            
        </div>
    </div></div></div></div>

    <li><a href="index.php"><button class="theme-btn btn-style-one" type="submit"onclick="alert('Back to home  successfully')" name="submit-form" style="top: -84px;margin-left:224px;
    margin-top: 0px;
    font-size: 16px;
    font-weight: 700;
    border-radius: 0px;
    padding: 11px 36px;
    color: #ffffff;
    border-color: #042038;
    background-color: #aa5f86;
    text-transform: uppercase;">Back to home</button> </a></li>

    <!--End Sidebar Page Container-->
    
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
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>



<!-- Mirrored from danslacuisinededede.com/constructo/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:20:15 GMT -->
</html>