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


    $sql="select * from tbl_login where email='timesaver@gmail.com';";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 
            
        $email=$row['email'];
        $mobile_no=$row['mobile_no'];
       
    }
    ?>





<h2 style="margin-left:687px;color: #042038;margin-top:67px;"><B>Edit profile</B></h2>
<div class="column col-md-6 col-sm-12 col-xs-12">
                	
                    
                    <!-- Register Form -->
                    <div class="login-form register-form" style="margin-left: 330px;
    width: 121%;margin-top:32px">
                        <!--Login Form-->
                        <form method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                                <label>Enter Your name</label>
                                <input type="text" name="admin" value="Admin" onKeyPress="return onlyAlphabets(event,this);" required>
                            </div>


                            <div class="form-group">
                                <label>Enter Your email</label>
                                <input type="email" name="email"value="<?php echo $email;?>" onKeyPress="return onlyAlphabets(event,this);" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Your Mobile No</label>
                                <input type="text" name="mobile_no" value="<?php echo $mobile_no;?>" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                            </div>

                            <div class="form-group ">
                                <button class="theme-btn btn-style-one" type="submit"
                                 name="submit">Edit</button>
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
    
    $email=$_POST['email'];
    $mobile_no=$_POST['mobile_no'];
  
    $sql="update tbl_login set email='$email',
    mobile_no='$mobile_no'
     where  login_id='$login_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('profile updated successfully');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
    }
?>
    <!--End Login Section-->
    
    <!--Call To Action Two-->
    
    <!--End Call To Action Two-->
    
   <!-- <?php
   include("footer.php");
   ?> -->
    
