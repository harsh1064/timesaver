<?php

$con = mysqli_connect("localhost","root","","timesaver");

if(isset($_POST['insertdata']))
{
	
	
 
 
	
	
	
	
	
	
	
	
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    

    $query = "INSERT INTO tbl_faq (question,answer) VALUES ('$question','$answer')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Saved"); </script>';
		echo '<script type="text/javascript"> window.location.href="faq5.php"; </script>';
        
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
