<?php
include("header.php");
include("sidebar.php");
?>
   


<section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h4 style="color:black"><i class="fa fa-angle-right"></i><B> Manage feedback</B></h4>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style=" width: 85%;
    margin-left: 217px"
}
                <thead>
                  <tr>
                    <th> email</th>
                    <th>message</th>
                    <th class="hidden-phone">date</th>
                    
                   
                    
                    <th class="hidden-phone">Delete</th>
                   
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
 include("config.php");
 $sql="select pl.email,lgn.* from tbl_feedback lgn INNER JOIN tbl_register pl ON
 pl.register_id=lgn.register_id where lgn.status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><?php echo $row['date'];?></td>
       
        

        
        <td><a href="feedback.php?feedback_id=<?php echo $row['feedback_id'];?>">
    <img src="img/delete.png"></td>
    
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

    
<?php
if(isset($_GET['feedback_id']))
{
    $feedback_id=$_GET['feedback_id'];
    $sql="update tbl_feedback set status=1 where feedback_id='$feedback_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "record deleted";
}
}
?>
<?php
include("footer.php");
?>