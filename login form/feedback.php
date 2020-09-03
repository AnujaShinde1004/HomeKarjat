
<?php
$db=mysql_connect("localhost","root","");
$er=mysql_select_db("karjat");
//$query="insert into rname(Names,Address1,Address2,E-mail id) values('$name','$add1','$add1','$mail')";
//$result=mysql_query($query);

$result1=mysql_query("select * from feedback");
?>
<html>
<title>First program of the database retrieve query</title>
<body>
<a href="../login form/dashboard.php"><img src="../images/curved-arrow-clipart_20.png" height="70" width="80"></a>
<table width="500" border="2" align="center">
<caption><h1>User Feedback</h1></caption>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>message</th>
</tr>
<?php
while($array=mysql_fetch_row($result1))
{
print"<tr><td>";
echo $array[0];
print"</td><td>";
echo $array[1];
print"</td><td>";
echo $array[2];
print"</td><td>";
echo $array[3];
print"</td></tr>";

}
?>
</body>
</html>