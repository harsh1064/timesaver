<?php
include("header.php");
?>
<br>

<?php
include("config.php");
if(isset($_POST['submit']))
{
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    
    $address=$_POST['address'];
    $service_id=$_POST['service_id'];
    $work=$_POST['work'];
    $image=$_FILES['image']['name'];
    
   
    




    $sql="insert into tbl_pr(name,email,mobileno,address,service_id,work,image,status)
    value('$name','$email','$mobileno','$address','$service_id','$work','$image','pending')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('record inserted');</script>";
}
}
?>






<!-- Login Form -->
<h2 style="margin-left:466px"><U><B>Become our service partner</B></U></h2>
<br>
<br>
<div class="login-form" style="width:71%;margin-left:207px;height:850px;">
                        <!--Login Form-->
                        <form method="post" enctype="multipart/form-data" >
                            
                            
                            
                            
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
                            <div class="form-group">
                                <label> Name</label>
                                <input type="text" name="name" placeholder=" enter technician name(input only alphabets) "onKeyPress="return onlyAlphabets(event,this);" required>
                            
                            </div>
                            
                            
                            <div class="form-group">
                                <label> Email Address</label>
                                <input type="text" name="email" placeholder=" Email " required>
                            </div>
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
                                <label>Enter Your Mobile no</label>
                                <input type="text" name="mobileno" placeholder=" enter mobile no(input only 0-9 digits)" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                            
                            </div>

                            <div class="form-group">
                                <label>Enter address</label>
                                <input type="text" name="address" placeholder="enter address " ondrop="return false;" onpaste="return false;" required>
                            
                            </div>
                            <div class="form-group">
                                <label> select service</label>
                                <select name="service_id" id="f-name" class="form-control"style="height:45px">
   <option value="0" >Select service Name</option>
            <?php
include("config.php");

$sql1 = "select * from tbl_service where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{
echo "<option value = '$row[0]'>$row[2]</option>";
}

?>
            </select>


                                
                            </div>
                            
                            <div class="form-group">
                                <label>Enter work experience</label>
                                <input type="text" name="work" placeholder="enter work experience"ondrop="return false;" onpaste="return false;" required>
                            
                            </div>
                            
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
         if(move_uploaded_file($file_tmp,'idimage/'.$file_name))
		 { 
			
		 }}
 }
 ?>

                            <div class="form-group">
                                <label>Upload ID proof</label>
                                <input type="file" name="image"  required>
                            
                            </div>
                            
                            
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="height: 53px;top:6px">Submit</button>
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