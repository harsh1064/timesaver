<?php
include("header.php");
?>

<?php   
include("config.php");				
					
					
$sql = "select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.status=0 and service_id='".$_REQUEST['service_id']."' "; 
	$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
							
						
						
                        $cat_id=$row['cat_id'];
                        $service_name=$row['service_name'];
                        $cat_name=$row['cat_name'];

                        $price=$row['price'];
                        $discount=$row['discount'];
                        $total_price=$row['total_price'];
                        $description=$row['description'];
                        $image="serviceimage/".$row['image'];
                        $duration=$row['duration'];
                        $turnaround_time=$row['turnaround_time'];
                        $pricing=$row['pricing'];
                        $whats_included=$row['whats_included'];
                ?>
                    
         <?php 
    $sql3 = "select * from tbl_register where email = '$user'"; 
    $res3 = mysqli_query($con,$sql3);
    while($row1 = mysqli_fetch_array($res3)){
        $register_id = $row1['register_id'];

    }
         ?>
    <form method="POST">              
<div class="w3aitssinglewthree">

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>service information</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>service information</li>
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
                	<div class="shop-single">
                    	
                        <div class="product-details">
							
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <?php echo "<img class='img-responsive' data-imagezoom='true' src='../admin/serviceimage/$row[8]'style='height: 405px;px;width:370px;border:1px solid black'>" 
                                    ?>
                                    
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="details-header">
                                            <h4 style="color:black"><?php echo $service_name;?></h4>
                                            <h3 ><?php echo $cat_name;?></h3>
                                            <br>
                                            <div class="item-price">Rs.<?php echo $price;?></div>
                                            <div class="item-price">Discount:  <?php echo $discount;?>  Rs.</div>
                                            <div class="item-price">total price:  <?php echo $total_price;?>  Rs.</div>
                                            <B><div class="item-price" style="width:190%"><?php echo $description;?></div></B>
                                            <br>
                                            
                                            <div class="item-price">Duration:  <?php echo $duration;?></div>
                                            <div class="item-price">Turn-around time:      <?php echo $turnaround_time;?></div>
                                            <div class="item-price">pricing:        <?php echo $pricing;?></div>
                                            <div class="item-price" style="width:146%">what's included:      <?php echo $whats_included;?></div>
                                            <br>
                                            
										<div class="other-options clearfix">
                        
                     <a href="city.php?service_id=<?php echo $row['service_id'];?>" class="cws-button alt gray-dark mb-20" style="border: 2px solid;
    font-size: 17px;
    color: #ffffff;
    background-color: #0db3c8;;
    text-transform: capitalize;
    font-family: 'Montserrat', sans-serif;padding: 14px 38px;
    font-weight: 400;
    ">Book Now</a>


<!-- <a href="friend.php?service_id=<?php echo $row['service_id'];?>" class="cws-button alt gray-dark mb-20" style="border: 2px solid;
    font-size: 17px;
    color: #ffffff;
    background-color: #0db3c8;;
    text-transform: capitalize;
    font-family: 'Montserrat', sans-serif;padding: 14px 38px;
    font-weight: 400;
    margin-left:10px
    ">Suggest to friend</a> -->
                                        </div>
									</div>
                                </div>
                            </div>
                            <!--Basic Details-->
                            <br>
                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">
                                
                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn">Description</li>
                                        <li data-tab="#prod-reviews" class="tab-btn active-btn">Review (3)</li>
                                    </ul>
                                    
                                    <!--Tabs Container-->
                                    <div class="tabs-content">
                                        
                                        <!--Tab-->
                                        <div class="tab" id="prod-details">
                                            <div class="content">
                                            <?php echo $description;?>
                                            </div>
                                        </div>
                                        
                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-reviews">
                                            <!--Reviews Container-->
                                            <div class="comments-area-two">
                                                <!--Comment Box-->
                                                <div class="comment-box-two">
                                                    <div class="comment">
                                                       									
									
									
									<style>
				  .rating1 {
    direction:ltr;
}
.starRating:not(old) {
    display: inline-block;
    height: 18px;
    width:100px;
    overflow: hidden;
}

.starRating:not(old) > input{
  margin-right :-26%;
  opacity      : 0;
}

.starRating:not(old) > label {
    float: right;
    background: url(images/1.png);
    background-size: contain;
    margin-right: 2px;
}

.starRating:not(old) > label:before{
  content         : '';
  display         : block;
  width           : 18px;
  height          : 18px;
  background      : url(images/2.png);
  background-size : contain;
  opacity         : 0;
  transition      : opacity 0.2s linear;
}

.starRating:not(old) > label:hover:before,
.starRating:not(old) > label:hover ~ label:before,
.starRating:not(:hover) > :checked ~ label:before{
  opacity : 1;
}
/*-- //Ratings --*/
/*-- //single-page --*/
/*-- to-top --*/
#toTop {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 55px;
	right: 2%;
	overflow: hidden;
	z-index: 999; 
	width: 32px;
	height: 32px;
	border: none;
	text-indent: 100%;
	background: url(images/up_arrow.png) no-repeat 0px 0px;
}
#toTopHover {
	width: 32px;
	height: 32px;
	display: block;
	overflow: hidden;
	float: right;
	opacity: 0;
	-moz-opacity: 0;
	filter: alpha(opacity=0);
}
</style> 



					<div class="rating1" form method="POST">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating_score" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating_score" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating_score" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating_score" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating_score" value="1">
							<label for="rating1">1</label>
						</span>
					</div><br>
                    <div class="form-group">
                                <label style="    margin-left: -5px;
    font-size: 17px"> enter your messsage </label>
</br>
                                <textarea  name="message"  style="border: 1px solid black ;width: 65%;
    margin-left: -5px;" required ></textarea>
                            </div>
                    <input type="submit" name="ratenow" value="Rate Now" style="    outline: none;
    padding: 14px 0;
    background: #fdb515;
    border: none;
    width: 40%;
    font-size: 1em;
    color: #fff;
    font-weight: 700;
    letter-spacing: 2px;">
             </form>
					
             <?php
                    include('config.php');
                    if(isset($_POST['ratenow']))
                    {
                        //$register_id=$_POST['register_id'];
                        $service_id=$_REQUEST['service_id'];
                        $rating_score=$_POST['rating_score'];
                        $message=$_POST['message'];
                        
    $sql="select * from tbl_rating where register_id='$register_id' and service_id=$service_id";
                        
$result1=mysqli_query($con,$sql);
$count=mysqli_num_rows($result1);
                    if($count>0)
                    {
                        echo "<script language='javascript'>alert('Sorry, You Already Rate For This service');</script>";
                        echo "<script language='javascript'>window.location.href='index.php';</script>";
                        }
                        else
                        {
$sql2="insert into tbl_rating(register_id,service_id,rating_score,message)values
('$register_id','$service_id','$rating_score','$message')";
$result2=mysqli_query($con,$sql2);
                        if($result2)
                        {
                            echo "<script language='javascript'>alert('Thank You For Rating');</script>";
                            echo "<script language='javascript'>window.location.href='index.php';</script>";
                        }
                        }
                    }
                    ?>

                                    
                  
                         
                                                </div>
                                                
                                               
                                                
                                                <!--Comment Box-->
                                                
                                                </div>
                                                
                                            </div>
                                            
                                         
                                                    
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!--End Product Info Tabs-->
                            
                        </div>
                        
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar">
						
                        
                        
                        
						</div>
                        
					</aside>
                </div>
                
            </div>
            
        </div>
    </div>
                    </form>
    <!--End Sidebar Page Container-->
    
    <!--Call To Action Two-->
    
    <!--End Call To Action Two-->
  
    <?php
					}
					?>





<?php
include("config.php");

if(isset($_POST['submit']))
{
   
	
	
	
	$sql="insert into tbl_booking(email,service_name,total_price,date,status)value
	('$user','$service_name','$total_price',NOW(),'pending')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script language='javascript'>alert('Your event booking request is send 
    successfully.');</script>";
	echo "<script language='javascript'>location.href = 'index.php';</script>";
}
}
					?>





</form>



  
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
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/script.js"></script>
<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>


<!-- Mirrored from danslacuisinededede.com/constructo/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:20:17 GMT -->
</html>