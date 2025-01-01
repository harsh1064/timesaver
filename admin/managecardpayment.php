<?php
include("header.php");
include("sidebar.php");
?>
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4><i class="fa fa-angle-right"></i> Manage card payment</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" style="    width: 85%;
    margin-left: 14%;" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                 
                    
                    <th class="hidden-phone">email</th>
                    <th class="hidden-phone">amount</th>
                    <th class="hidden-phone">card type</th>
                    <th class="hidden-phone">card name</th>
                    <th class="hidden-phone">card number</th>
                    <th class="hidden-phone">expiry date</th>
                   
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
                  include("config.php");
$sql="select * from tbl_pay ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        
      
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['amount'];?></td>
        <td><?php echo $row['card_type'];?></td>
        <td><?php echo $row['name_card'];?></td>
        <td><?php echo $row['card_no'];?></td>
        <td><?php echo $row['expiry_date'];?></td>
        
        
    
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
include("footer.php");
?>