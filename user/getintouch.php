<?php
include("header.php");
?>


<?php
include("config.php");
if(isset($_POST['submit']))
{
    
    $cat_id=$_POST['cat_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    
    $pincode=$_POST['pincode'];
    




    $sql="insert into tbl_getintouch(cat_id,name,email,mobileno,pincode)
    value('$cat_id','$name','$email','$mobileno','$pincode')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('record inserted');</script>";
}
}
?>






<!-- Login Form -->
<div class="login-form" style="width:71%;margin-left:207px;height:632px;">
                        <!--Login Form-->
                        <form method="post">
                            
                            
                            <div class="form-group">
                                <label> Get in touch</label>
                                <select name="cat_id" id="f-name" class="form-control"style="height:45px">
   <option value="0" >Select Category Name</option>
            <?php
include("config.php");

$sql1 = "select * from tbl_category where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{
echo "<option value = '$row[0]'>$row[1]</option>";
}

?>
            </select>


                                
                            </div>
                            
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
                                <input type="text" name="name" placeholder=" enter name(input only alphabets) "onKeyPress="return onlyAlphabets(event,this);" required>
                            
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
                                <label>Enter pincode</label>
                                <input type="text" name="pincode" placeholder="enter pincode(input only 0-5 digits) " minlength="6" maxlength="6" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                            
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