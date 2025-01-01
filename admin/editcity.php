<?php
include("header.php");
include("sidebar.php");
?>

<?php
include("config.php");
if(isset($_GET['city_id']))
{
    $city_id=$_GET['city_id'];

    $sql="select * from tbl_city where status=0 and city_id='$city_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 

        $city=$row['city'];
        
       
        
    
    }}
    ?>

<section id="main-content">
 <section class="wrapper">
   <h3><i class="fa fa-angle-right"></i>Manage city/village</h3>
   <!-- BASIC FORM VALIDATION -->
   <div class="row mt">
     <div class="col-lg-12">
       <h4><i class="fa fa-angle-right"></i> </h4>
       <div class="form-panel">
         <form role="form"  method="post" class="form-horizontal style-form">
           <div class="form-group has-success">
             <label class="col-lg-2 control-label">city/village</label>
             <div class="col-lg-10">
               <input type="text" name="city" value="<?php echo $city;?>" placeholder="" id="f-name" class="form-control">
               <p class="help-block"></p>
             </div>
           </div>


          
           
           <div class="form-group">
             <div class="col-lg-offset-2 col-lg-10">
               <button class="btn btn-theme" name="submit" type="submit">Submit</button>
             </div>
           </div>
         </form>
       </div>
       <!-- /form-panel -->
     </div>
     <!-- /col-lg-12 -->
   </div>



   <?php
                        include("config.php");
                        if(isset($_POST['submit']))
                        {
                            
                            
                            
                        
                        
                            $city=$_POST['city'];
                            
                            
                            
                            
                        
                        
                        
                        
                        
                        
                           
                            $sql="update tbl_city set city='$city'
                             where status=0 and city_id='$city_id'";
                        $result=mysqli_query($con,$sql);
                        if($result)
                        {
                            echo "<script>alert('city updated successfully');</script>";
                            echo "<script>window.location.href='city.php';</script>";
                        }
                            }
                        ?>
                        
                            

   
                            
                            <?php
                        include("footer.php");
                        ?> 