<?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
if(mysql_query("delete from population where rid=".$_GET['id'].""))
header("location:index.php");
else
echo mysql_error();
?>