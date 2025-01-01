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
                                    <?php echo "<img class='img-responsive' data-imagezoom='true' src='./admin/serviceimage/$row[8]'style='height: 400px;px;width:370px;border:1px solid black'>" 
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
                                            
										
                                            <a  href="login.php?service_id=
<?php echo $row['service_id'];?>" >
                                            
                                            <button type="button" class="theme-btn add-to-cart"onclick="alert('login first to book service')">Book now</button>
                                        </div>
									</div>
                                </div>
                            </div>
                            <!--Basic Details-->
                            
                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">
                                
                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn">Descripton</li>
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
                                                        
                                                        </div>

                                                        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class=""></i><B> </B></h3>
        
        <h4 style="margin-left:-206px;color:black"><i class=""></i><B></B></h4>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-100px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style=" width: 77%;
    margin-left: 142px"
}
                <thead>
                  <tr>
                    <th>email </th>
                    <th>service name</th>
                    <th>rating score</th>
                    <th class="hidden-phone">message</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include("config.php");
    
    $sql1="select pl.service_name,lgn.* from tbl_rating lgn INNER JOIN tbl_service pl ON
pl.service_id=lgn.service_id where lgn.status=0 and pl.service_id='".$_REQUEST['service_id']."' ";
$result1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($result1))
{
    ?>
<tr> 
<td>
<?php $id = $row['register_id'];
$sql1 = "select email from tbl_register where register_id = $id";
$result1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($result1))
{
echo $row1['email']; }?></td>
   
        <td><?php echo $row['service_name'];?></td>
       
        <td><?php echo $row['rating_score'];?></td>
        <td><?php echo $row['message'];?></td>
</tr>

<?php

}
?>              </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

                                                    </div>
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
    <!--End Sidebar Page Container-->
    
    <!--Call To Action Two-->
    
    <!--End Call To Action Two-->
  
    <?php
					}
					?>
  
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