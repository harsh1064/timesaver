<?php
   include("header.php");
   ?>
   <script language="Javascript" type="text/javascript">

function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode == 32))
            return true;
        else
            return false;

    }
    catch (err) {
        alert(err.Description);
        
    }
}

</script>


<?php
include("config.php");


    $sql="select * from tbl_register where  email='$user'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 
        $register_id = $row['register_id'];    
        $username=$row['username'];
        $city=$row['city'];
        $address=$row['address'];
        $gender=$row['gender'];
        
        $image=$row['image'];
        $mobile_no=$row['mobile_no'];
       
    }
    ?>





<h2 style="margin-left:687px;color: #042038"><B>Edit profile</B></h2>
<div class="column col-md-6 col-sm-12 col-xs-12">
                	
                    
                    <!-- Register Form -->
                    <div class="login-form register-form" style="    margin-left: 330px;
    width: 121%;margin-top:32px">
                        <!--Login Form-->
                        <form method="post" enctype="multipart/form-data" >
                            


                            <div class="form-group">
                                <label>Enter Your username</label>
                                <input type="text" name="username"value="<?php echo $username;?>" onKeyPress="return onlyAlphabets(event,this);" required>
                            </div>

                              <div class="form-group">
                                <label>Enter Your city</label>
                                <input type="text" name="city" value="<?php echo $city;?>" onKeyPress="return onlyAlphabets(event,this);" required>
                            </div>
                            <div class="form-group">
                                <label>Enter Your address</label>
                                <input type="text" name="address" value="<?php echo $address;?>" required>
                            </div>

                            <div class="form-group">
                                <label>Select your gender</label>
                        <br>
                                <select name="gender" style="width:100%;height:37px" >
   
                    
                <?php
include("config.php");

$sql1 = "select * from tbl_register where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{ ?>
<option value = '<?=$row[6]?>' <?php if($register_id==$row[6]){ echo "selected='selected'";}?> >
<?=$row[6];?></option>
<?php }

?></select>    </div>


                            <?php
 if(isset($_FILES['image']))
 {
	 $file_name=$_FILES['image']['name'];
	 $file_tmp=$_FILES['image']['tmp_name'];
	 $file_size=$_FILES['image']['size'];
     if($_FILES['image']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'profileimage/'.$file_name))
		 { 
			
		 }}
 }
 ?>



                            <div class="form-group">
                                <label>image</label>
                                <img src="../profileimage/<?php echo $image; ?>" 
style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
<input type="file" name="image" id="image" style="float:left;" /></td>
<td><input type="hidden" name="image" id="image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $image;} ?>"/>
                            </div>
<br>
                            <script type="text/javascript">
      var specialKeys = new Array();
     specialKeys.push(8); //
     function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
     var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
	  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                    



                            <div class="form-group">
                                <label style="    margin-top: 21px;
    margin-left: -134px">Enter Your Mobile No</label>
                                <input type="text" name="mobile_no" value="<?php echo $mobile_no;?>" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                            </div>
                            
                           	<div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit"
                                 name="submit">Edit</button>
                            </div>
                            
                        </form>
                            
                    </div>
                    <!--End Register Form -->
                </div>
                
            </div>
        </div>
    </section>

    
    <?php
include("config.php");
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']))
    {
    
    $username=$_POST['username'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    
    
    $image = trim($_FILES['image']['name']);

	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 move_uploaded_file($_FILES['image']['tmp_name'], "profileimage/".$_FILES['image']['name']);

    $mobile_no=$_POST['mobile_no'];
  
     $sql="update tbl_register set register_id='$register_id',username='$username',
    city='$city',address='$address',gender='$gender',image='$image',mobile_no='$mobile_no'
     where register_id='$register_id'"; 
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('profile updated successfully');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
    }}
?>
    <!--End Login Section-->
    
    <!--Call To Action Two-->
    
    <!--End Call To Action Two-->
    
   <?php
   include("footer.php");
   ?>
    
