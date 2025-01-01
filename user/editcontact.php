
<?php
include("header.php");
?>
<?php
include("config.php");
if(isset($_GET['contact_id']))
{
    $contact_id=$_GET['contact_id'];

    $sql="select * from tbl_contact where status=0 and contact_id='$contact_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 

        $name=$row['name'];
        
        $email=$row['email'];
        $name=$row['subject'];
        
        $email=$row['phone'];
        $name=$row['message'];
        
    
        
    
    }}
    ?>

<!--Contact Form-->
<div class="contact-form style-two">
                            <form method="post" action="https://danslacuisinededede.com/constructo/email.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="name" value="<?php echo $name;?>" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="subject" value="<?php echo $subject;?>" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <textarea name="message"<?php echo $message;?>" placeholder="Your Massage"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <button type="submit"name="submit" class="theme-btn btn-style-one">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div> 
                       

                        <?php
                        include("config.php");
                        if(isset($_POST['submit']))
                        {
                            
                            
                            
                        
                        
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $subject=$_POST['subject'];
                            $message=$_POST['message'];
                            
                            
                        
                        
                        
                        
                        
                        
                           
                            $sql="update tbl_contact set name='$name',email='$email',
                            subject='$subject',message='$message'
                             where status=0 and contact_id='$contact_id'";
                        $result=mysqli_query($con,$sql);
                        if($result)
                        {
                            echo "<script>alert('service updated successfully');</script>";
                            echo "<script>window.location.href='contact.php';</script>";
                        }
                            }
                        ?>
                        
                            

   
                            
                            <?php
                        include("footer.php");
                        ?> 