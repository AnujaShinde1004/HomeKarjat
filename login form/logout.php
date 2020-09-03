<?php 
session_start();
session_destroy();
//or
//unset($_SESSION['stat']);
header("location:index.php?msg=Logout Successfully");

?>
