<?php
$cn=mysqli_connect("localhost","root","") or die("Could not Connect My Sql");
mysqli_select_db("karjat",$cn)  or die("Could connect to Database");
?>
