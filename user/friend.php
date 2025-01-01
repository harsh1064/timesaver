<?php
include("header.php");
?>
 <?php
						
						
                        include('config.php');
                        if(isset($_POST['submit']))
                            {
             $service_id=$_POST['service_id'];	
            $friend_id=$_POST['friend_id'];
        $sql = "select * from tbl_service where service_id='$service_id'";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                    
                                                            $service_name=$row['service_name'];	
                        
                                }
                                
                        
                                
                                
                                include ("class.phpmailer.php"); // include the class name
                                                                    $mail = new PHPMailer(); // create *a new object
                                                                                $mail->IsSMTP(); // enable SMTP
                                                                                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                                                                                $mail->SMTPAuth = true; // authentication enabled
                                                            $mail->SMTPSecure = 'tls';
                                                                $mail->Host = 'smtp.gmail.com';
                                                                                /*$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
                                                                                $mail->Host = "mail.gmail.com";*/
                                                                $mail->Port = 587; // or 587
                                                                            $mail->IsHTML(true);
                                                        $mail->Username = "bookmyhousekeeper2k19@gmail.com";
                                                            $mail->Password = "krupa123";
                                                                    $mail->SetFrom("bookmyhousekeeper2k19@gmail.com");
                                        $mail->Subject = "Suggestion";
                            $mail->Body = "<html><body><br> Email  id: $friend_id <br>
                            <br> place : $service_name. <br> 
                           
                                   
                                                                                                    
                                                                                       
                                                                                                 <br>Explore India Holiday Team.<br></body></html>";
                                                                                                 $mail->AddAddress($friend_id);
                                                                                
                                                                                if(!$mail->Send())
                                                                                {
                                                                                    echo "<script language='javascript'>alert('" . $mail->ErrorInfo . "');</script>";
                                                                                }
                                                                                else
                                                                                {
                                                                                                echo "<script language='javascript'>alert('Mail has been sent');</script>";
                        
                                                                                }
                                                                                
                                                                                
                                                                            }
                                                                
                                                ?>
                                
<h2 style="margin-left:610px;color: #042038"><B>Suggest to friend</B></h2><br>
<div class="login-form"style="width:71%;margin-left:207px;height: 365px;">
                        <!--Login Form-->
                        <form method="post" >
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="friend_id"placeholder="">
                                <select name="service_id" required style="margin-top: 20px;
    width: 100%;
    height: 49px">
                               <option value="" hidden selected style="background:#000;color:#fff;">--select--</option>
<?php
								if(isset($_SERVER['PHP_SELF']))
								{
								include("config.php");
                    
					?>
					<?php $sel=mysqli_query($con,"select * from tbl_service where status=0"); 
					while ($row=mysqli_fetch_array($sel)) { ?>
					<option value=<?php echo $row['service_id']?> style="background:#000;color:#fff;">
					<?php echo $row['service_name']?></option>
					<?php } 
								} ?>
                    </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Message </label>
                                <textarea name="message" required style="width:100%"></textarea>
                                
                    
                            </div>
                            
                            
                           
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit" style="margin-top: 37px;top:-21px">Submit</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </form>
                            
                    </div></div></div></div>
                    <!--End Login Form -->
                    
                </div>
                <br>
                <br>
                            
                    
                    <?php
                    include("footer.php");
                    ?>
                    </div>