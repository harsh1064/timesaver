<?php
include("header.php");

?>
   


<section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h2 style="color:black;margin-bottom:100px"><center><B>Manage booking</B></center></h2>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style=" width: 85%;
    margin-left : 217px;">
<!-- } -->
                <thead>
                  <tr>
                    <th> email</th>
                    <th>service name</th>
                    <th>total price</th>
                    <th class="hidden-phone">date</th>
                    
                   
                    <!-- <th>Bill</th> -->
                    <th class="hidden-phone">status</th>
                    <th class="hidden-phone">Cancel</th>
                   
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
 include("config.php");
 $sql="select * from tbl_booking 
  where email='$user'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['service_name'];?></td>
        <td><?php echo $row['total_price'];?></td>
        <td><?php echo $row['date'];?></td>
        <!-- <td><a href="bill.php">Bill</a></td> -->
        <td><?php echo $row['status'];?></td>
        <td><a href="bookingstatus.php?book_id=<?php echo $row['book_id'];?>">
    <img src="images/cancel.jpg"></td>

    
</tr>

<?php

}
?>              </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          
          <!-- page end-->
        </div><br>
                        <div class="form-group"><center>
                            <a href="reportuser.php"><input type="submit" name="submit" value="Report" class="btn btn-primary" ></a></center>
                        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php
if(isset($_GET['book_id']))
{
    $book_id=$_GET['book_id'];
    $sql="update tbl_booking set status='cancel' where book_id='$book_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "<script language='javascript'>alert('Your service request is cancelled');</script>";
}
}
?>
 <br>
 <br>
 <br>

<?php
include("footer.php");
?>