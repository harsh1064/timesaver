



<?php
include("header.php");
?>


<?php
include("config.php");
if(isset($_POST['submit']))
{
    $register_id=$_POST['register_id'];
    $city_id=$_POST['city_id'];
    $service_id=$_POST['service_id'];
    $date=$_POST['date'];
    $time=$_POST['time'];
   
    $sql= "select * from tbl_register where email = '$user' and status = 0";
    $result=mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result))
        {
         
            $register_id = $row['register_id'];

        }

   


    $sql1="insert into tbl_location(city_id,register_id,service_id,date,time)
    value('$city_id','$register_id','$service_id',now(),'$time')";
$result1=mysqli_query($con,$sql1);
if($result1)
{
    echo "<script>alert('record inserted');</script>";
    echo "<script language='javascript'>location.href='servicebookingform.php?service_id=".$_POST['service_id']."';</script>";
}
}
?>






<!-- Login Form -->
<div class="login-form" style="width:71%;margin-left:207px;height:632px;">
                        <!--Login Form-->
                        <form method="post">
                       
                        <input type="text" name="register_id" value="<?php echo $user;?>" hidden/>
                            <div class="form-group">
                                <label>city/village</label>
                                <select name="city_id" id="f-name" class="form-control"style="height:45px">
   <option value="0" >Select city/village Name</option>
            <?php
include("config.php");

$sql1 = "select * from tbl_city where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{
echo "<option value = '$row[0]'>$row[1]</option>";
}

?>
            </select>


                                
                            </div>
                            <div class="form-group">
                                <label>service</label>
                                <input type="hidden" name="service_id" value="<?php echo $_GET['service_id']; ?>" />
                                <select name="service" id="f-name" class="form-control"style="height:45px">
   <!-- <option value="0" >Select service </option> -->
            <?php
include("config.php");

$sql1 = "select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.status=0 and service_id='".$_REQUEST['service_id']."' ";
$result = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result))
					{
                        $service_name=$row['service_name'];
echo "<option value = '$row[service_name]'>$row[service_name]</option>";
}

?>
            </select>


                                
                            </div>
                            
                            
                            <div class="form-group">
                                <label>select date</label><br>
                                <input type="date" name="date" style="height:45px" required>
                            
                            </div>
                            
                            <div class="form-group">
                                <label>select time</label><br>
                            <select class="input__field--hideo input__field" name="time" id="ddlTime" style="height:45px"><option value="09:00 AM - 11:00 AM">09:00 AM - 11:00 AM</option><option value="11:00 AM - 01:00 PM">
                                11:00 AM - 01:00 PM</option><option value="01:00 PM - 03:00 PM">01:00 PM - 03:00 PM</option><option value="03:00 PM - 05:00 PM">03:00 PM - 05:00 PM</option><option value="05:00 PM - 07:00 PM"
                                >05:00 PM - 07:00 PM</option><option value="07:00 PM - 09:00 PM">07:00 PM - 09:00 PM</option></select>
                                </div>
                            
                               
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="height: 53px;top:6px">Submit</button>
                                    </div>
                                    
                                </div>
            
                                
                        

                                
                               
                                </div>
                            
                        </form>
                       
                               
                    </div>
                    <!--End Login Form -->
                    
                </div>

                <br>
                <br>
                <br>
                

















<?php
include("footer.php");
?>
