<?php 
 session_start();
if(!isset($_SESSION['stat']))
header("location:index.php?msg=Kindly login first");
mysql_connect("localhost","root","");
mysql_select_db("karjat");
 
 
?>