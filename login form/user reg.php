 <?php
$db=mysql_connect("localhost","root","");
$er=mysql_select_db("karjat");


$result=mysql_query("select * from user");
?>
<html>
<title>First program of the database retrieve query</title>
<body>
<a href="../login form/dashboard.php"><img src="../images/curved-arrow-clipart_20.png" height="70" width="80"></a>
<table width="500" border="2" align="center">
<caption><h1>User Registration</h1></caption>
<tr>
<th>user_id</th>
<th>login</th>
<th>pass</th>
<th>username</th>
<th>address</th>
<th>city</th>
<th>phone</th>
<th>email</th>

</tr>
<?php
while($arra=mysql_fetch_row($result))
{
print"<tr><td>";
echo $arra[0];
print"</td><td>";
echo $arra[1];
print"</td><td>";
echo $arra[2];
print"</td><td>";
echo $arra[3];
print"</td><td>";
echo $arra[4];
print"</td><td>";
echo $arra[5];
print"</td><td>";
echo $arra[6];
print"</td><td>";
echo $arra[7];
print"</td></tr>";

}
?>




</body>
</html>
