

<?php
  session_start();
  $user = $_SESSION['user'];
  session_destroy();
  echo "<script language='javascript'>
    window.location.href='../index.php';</script>";
	?>

<!-- <?php
session_start();
$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script> -->