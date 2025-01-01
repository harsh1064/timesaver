<?php
 $con = mysqli_connect("localhost","root","","timesaver");


if(isset($_POST['deletedata']))
{
    $faq_id = $_POST['delete_id'];

    $query = "update tbl_faq set status=1 WHERE faq_id='$faq_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:faq5.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>