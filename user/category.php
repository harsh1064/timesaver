<?php
include("header.php");
?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/h2.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Category</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>category</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +917285075147</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Project Section-->
    <section class="project-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<div class="title"></div>
                <h2><span class="theme_color">Our </span>Category</h2>
            </div>
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
               
                
                <div class="filter-list row clearfix">
                <?php
include("config.php");
$sql = "select * from tbl_category where status=0";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
    $path="catimage/".$row['image'];
?>
                    <!--Gallery Item-->
                    <div class="gallery-item mix all agriculture col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    
                        <div class="inner-box">




                            <figure class="image-box">
                               

                                <?php echo "<img alt='' class='img-responsive' src='../admin/catimage/$row[2]'style='height:270px;width:370px;'>" ?>

                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="projects-detail.html" class="image-link"><span class="icon fa fa-link"></span></a></li>
  <li><a href="#" data-fancybox="images" data-caption=""
   class="link"><span class="icon flaticon-picture-gallery"></span></a></li>





                                        </ul>
                                        <div class="content">

                                        
                                        
                                     <h3>   <a  href="allservice.php?cat_id=
						<?php echo $row['cat_id'];?>" >
         <?php echo $row['cat_name'];?></a></h3>
                                            <div class="category"></div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                   
<?php
}
?>



                    
                </div>                    
                
            </div>
            
            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
            	<li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->
            
        </div>
    </section>
    <!--End Project Section-->
    
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
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>



<!-- Mirrored from danslacuisinededede.com/constructo/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 10:20:02 GMT -->
</html>