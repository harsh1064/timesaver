<?php
$con = mysqli_connect("localhost","root","","timesaver");

    if(isset($_POST['updatedata']))
    {   
        $faq_id = $_POST['update_id'];
        
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        

        $query = "UPDATE tbl_faq SET question='$question',answer='$answer' WHERE
		faq_id=$faq_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            echo '<script type="text/javascript"> window.location.href="faq1.php"; </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

