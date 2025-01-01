<?php

$con = mysqli_connect("localhost","root","","timesaver");

if(isset($_POST['insertdata']))
{
	
	
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
         if(move_uploaded_file($file_tmp,'catimage/'.$file_name))
		 { 
			 
		 }}
 }
 
	
	
	
	
	
	
	
	
    $cat_name = $_POST['cat_name'];
	$image = $_FILES['image']['name'];
    

    $query = "INSERT INTO tbl_category (cat_name,image) VALUES ('$cat_name','$image')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Saved"); </script>';
		echo '<script type="text/javascript"> window.location.href="category1.php"; </script>';
        
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
