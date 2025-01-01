<?php
$con = mysqli_connect("localhost","root","","timesaver");

    if(isset($_POST['updatedata']))
    {   
        $cat_id = $_POST['update_id'];
        
        $cat_name = $_POST['cat_name'];
		$image = trim($_FILES['image']['name']);

	
	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['oldimagename'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 
 move_uploaded_file($_FILES['image']['tmp_name'], "catimage/".$_FILES['image']['name']);
        

        $query = "UPDATE tbl_category SET cat_name='$cat_name',image='$image' WHERE
		cat_id=$cat_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            echo '<script type="text/javascript"> window.location.href="category1.php"; </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

