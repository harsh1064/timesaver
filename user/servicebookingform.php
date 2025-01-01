
<?php
include("header.php");
?>

<?php
include("config.php");

global $service_id,$cat_id,$service_name,$price,$discount,$total_price,$description,$image,$duration,$turnaround_time,
       $pricing,$whats_included;
$sql = "select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.status=0  and service_id='".$_REQUEST['service_id']."' "; 

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{

    $cat_id=$row['cat_id'];
    $service_name= $row['service_name'];
   
    $price= $row['price'];
    $discount= $row['discount'];
    $total_price= $row['total_price'];
    $description= $row['description'];
    
    $duration= $row['duration'];
    $turnaround_time= $row['turnaround_time'];
    $pricing= $row['pricing'];
    $whats_included= $row['whats_included'];	
}
?>
 <br /><br />
 <div class="container">
          <div class="row">
            
          </div>
          <div class="review-content pattern relative">
          <div class="row">
          <h2 class="trans-uppercase mb-10" style="color:#444444;text-align:center;margin-bottom:30px;">service <span style="color:#ffc107;text-transform:none;">Booking</span></h2>
          </div>
          
          

            
            
            <form method="POST" role="form" class="form-horizontal style-form" >
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Service Name</label>
                  <div class="col-lg-10">
                    <input type="text" name="service_name"value="<?php echo $service_name;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">price </label>
                  <div class="col-lg-10">
                    <input type="text"name="price"  value="<?php echo $price;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">discount </label>
                  <div class="col-lg-10">
                    <input type="text"name="discount" value="<?php echo $discount;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">total-price </label>
                  <div class="col-lg-10">
                    <input type="text"name="total_price" value="<?php echo $total_price;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                                <script>
                function updateInput(){
                    var price = document.getElementsByName("price")[0].value;
                    var discount = document.getElementsByName("discount")[0].value;
                    document.getElementsByName("total_price")[0].value = price-(discount*price/100);
                }
                </script>


                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Description </label>
                  <div class="col-lg-10">
                    <input type="text"name="description"value="<?php echo $description;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
          


               
            

                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Duration</label>
                  <div class="col-lg-10">
                    <input type="text"name="duration"value="<?php echo $duration;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">TurnAround time</label>
                  <div class="col-lg-10">
                    <input type="text"name="turnaround_time" value="<?php echo $turnaround_time;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <!-- <form role="form" class="form-horizontal style-form"> -->
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">pricing </label>
                  <div class="col-lg-10">
                    <input type="text"name="pricing" value="<?php echo $pricing;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                


                
                <!-- <form role="form" class="form-horizontal style-form"> -->
                  <div class="form-group has-success">
                    <label class="col-lg-2 control-label">what's included</label>
                    <div class="col-lg-10">
                      <input type="text"name="whats_included" value="<?php echo $whats_included;?>" placeholder="" id="f-name" class="form-control">
                      <p class="help-block"></p>
                    </div>
                  </div>


                
               <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit"name="submit">Submit</button>
                  </div>
                </div>
              </form>    
           
            
          
 <?php
include("config.php");
if(isset($_POST['submit']))
{
	
	$service_id=$_REQUEST['service_id'];
	$book_id=$_POST['book_id'];
 
	$email=$_POST['email'];
	$service_name=$_POST['service_name'];
	
		$total_price=$_POST['total_price'];

	
	

	$sql="insert into tbl_booking(book_id,email,service_name,total_price,date,status)value('$book_id','$user','$service_name','$total_price',NOW(),'pending')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script language='javascript'>alert('Your service booking request is send successfully.');</script>";
	echo "<script language='javascript'>location.href = 'payment.php';</script>";
}
}
					?>
          </div></div>
          <br /><br />
       
    
       

<?php
include("footer.php");
?>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  
$("#TextBox1").datepicker({ 
	dateFormat: 'yy-mm-dd',
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
		
		
		
		
		
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});
 

</script> 
