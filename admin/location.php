<?php
include("header.php");
include("sidebar.php");
?>
   


<section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h4 style="margin-left:-206px;color:black"><i class="fa fa-angle-right"></i><B>Manage location</B></h4>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style=" width: 85%;
    margin-left: 217px"
}
                <thead>
                  <tr>
                    
                    <th>city</th>
                    <th>email</th>
                    <th class="hidden-phone">service name</th>
                    <th class="hidden-phone">date</th>
                    <th class="hidden-phone">time</th>
                   
                    
                    <th class="hidden-phone">Delete</th>
                   
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
                  include("config.php");
$sql="select * from tbl_location where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>

<tr>
<td><?php $id = $row['city_id']; 
$sql1 = "select city from tbl_city where city_id = $id and status = 0";
			$result1 = mysqli_query($con,$sql1);
		while($row1 = mysqli_fetch_array($result1))
				{
				echo $row1['city']; }?></td>
     
     <td><?php $id = $row['register_id']; 
$sql2 = "select email from tbl_register where register_id = $id and status = 0";
			$result2 = mysqli_query($con,$sql2);
		while($row2 = mysqli_fetch_array($result2))
				{
				echo $row2['email']; }?></td>


<td><?php $id = $row['service_id']; 
$sql3 = "select service_name from tbl_service where service_id = $id and status = 0";
			$result3= mysqli_query($con,$sql3);
		while($row3 = mysqli_fetch_array($result3))
				{
				echo $row3['service_name']; }?></td>
   
    
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['time'];?></td>
       
        

        
        <td><a href="location.php?location_id=<?php echo $row['location_id'];?>">
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
if(isset($_GET['location_id']))
{
    $location_id=$_GET['location_id'];
    $sql="update tbl_location set status=1 where location_id='$location_id'";
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