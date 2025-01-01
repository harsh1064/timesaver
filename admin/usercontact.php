<?php
include("header.php");
include("sidebar.php");
?>
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4><i class="fa fa-angle-right"></i> Manage Contact</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" style="    width: 85%;
    margin-left: 14%;" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                  <th class="hidden-phone">name</th>
                    
                    <th class="hidden-phone">email</th>
                    <th class="hidden-phone">subject</th>
                    <th class="hidden-phone">phone</th>
                    <th class="hidden-phone">message</th>
                    
                    
                    <th class="hidden-phone">Delete</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
                  include("config.php");
$sql="select * from tbl_contact where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['name'];?></td>
      
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['subject'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['message'];?></td>
        
       
        
        <td><a href="usercontact.php?contact_id=<?php echo $row['contact_id'];?>">
    <img src="img/delete.png"></td>
    
</tr>
<?php

}
?>

                  </tr>
                  
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
if(isset($_GET['contact_id']))
{
    $contact_id=$_GET['contact_id'];
    $sql="update tbl_contact set status=1 where contact_id='$contact_id'";
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