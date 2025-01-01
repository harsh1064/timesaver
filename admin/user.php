<?php
include("header.php");
include("sidebar.php");

include("config.php");


if(isset($_GET['register_id']))
{
    $register_id=$_GET['register_id'];
    $sql="update tbl_register set is_deleted=1 where register_id='$register_id'";
    $result=mysqli_query($con,$sql);
      if($result)
      {
          echo "record deleted";
          echo "<script language='javascript'>window.location.href='user.php';</script>";
      }
}

if(isset($_GET['user_id']) && isset($_GET['status']))
{
    $register_id=$_GET['user_id'];
    $status=$_GET['status'];
    if($status == 1){
      $update_status = 0;
    }else{
      $update_status = 1;
    }
    $sql="update tbl_register set status=$update_status where register_id='$register_id'";
    $result=mysqli_query($con,$sql);
   
        echo "record updated";
        echo "<script language='javascript'>window.location.href='user.php';</script>";
    // or die();
    exit();
    
}
?>
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4><i class="fa fa-angle-right"></i> Manage User</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" style="    width: 85%;
    margin-left: 14%;" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                  <th class="hidden-phone">email</th>
                    
                    <th class="hidden-phone">username</th>
                    <th class="hidden-phone">city</th>
                    <th class="hidden-phone">address</th>
                    <th class="hidden-phone">gender</th>
                    <th class="hidden-phone">image</th>
                    <th class="hidden-phone">mobile_no</th>
                    <th class="hidden-phone">status</th>
                    <th class="hidden-phone">Delete</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
                
$sql="select * from tbl_register where is_deleted=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
  if($row['status'] == 1){
    $status = 'Activated';
  }else{
    $status = "Deactivated";
  }
    ?>
    <tr>
        <td><?php echo $row['email'];?></td>
      
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><img src="../registerimage/<?php echo $row['image'];?>" style="width:50px;height:50px;"></td>
        <td><?php echo $row['mobile_no'];?></td>
       <td>
        <?php if($row['register_id'] != 1){ ?>
          <a href="user.php?user_id=<?php echo $row['register_id'];?>&status=<?php echo $row['status'];?>"><?php echo $status; ?></a>
        <?php } ?>
        </td>
        <td>
        <?php if($row['register_id'] != 1){ ?>
          <a href="user.php?register_id=<?php echo $row['register_id'];?>">
            <img src="img/delete.png">
          </a>
        <?php } ?>
        </td>
    
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