<?php
include("header.php");
include("sidebar.php");
?>
   


<section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h4 style="color:black"><i class="fa fa-angle-right"></i><B> Manage booking</B></h4>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" 
              id="hidden-table-info" style="width: 85%; margin-left: 217px">
}
                <thead>
                  <tr>
                    <th> email</th>
                    <th>service name</th>
                    <th>total price</th>
                    <th class="hidden-phone">date</th>
                    
                   
                    
                    <th class="hidden-phone">Approve</th>
                   
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
 include("config.php");
 $sql="select * from tbl_booking 
  where status='pending'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['service_name'];?></td>
        <td><?php echo $row['total_price'];?></td>
        <td><?php echo $row['date'];?></td>
       
        

        <td><a href="booking.php?book_id=<?php echo $row['book_id'];?>">
    <img src="img/tick2.jpg"></td>
    
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
if(isset($_GET['book_id']))
{
    $book_id=$_GET['book_id'];
    $sql="update tbl_booking set status='approve' where book_id='$book_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "request approved";
}
}
?>

<?php
include("footer.php");
?>