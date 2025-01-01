<?php
   include("header.php");
   ?>


<?php
include("config.php");
if(isset($_POST['submit']))
{
    $register_id=$_POST['register_id'];
    $message=$_POST['message'];



    // $sql= "select * from tbl_register where email = '$user' and status = 0";
    $sql= "select * from tbl_register where email = '$user'";
    $result=mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result))
    {
    
    $register_id = $row['register_id'];                    
    }
    








    $sql1="insert into tbl_feedback(register_id,message,date)
    value('$register_id','$message',now())";
$result1=mysqli_query($con,$sql1);
if($result1)
{
    echo "<script language='javascript'>alert('Feedback Send Successfully.');</script>";
}
}
?>

   <h2 style="margin-left:648px;color: #042038"><B>Feedback</B></h2><br>
<div class="login-form" style="    width: 59%;
    margin-left: 348px;
    height: 308px">
                        <!--Login Form-->
                        <form method="post" >
                           
                            <input type="text" name="register_id" value="<?php echo $user;?>" hidden/>
                        <div class="form-group">
                                <label>Enter Your message here</label><br>
                                <textarea name="message" required style="width:95%"></textarea>
                            </div>

                            
                            
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                <button class="theme-btn btn-style-one" type="submit" name="submit"> Submit</button>
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                        </form>
                            
                    </div>
                    <!--End Login Form -->
                    
                </div>
                <?php
   include("footer.php");
   ?>