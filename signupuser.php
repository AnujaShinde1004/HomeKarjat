
<html>

<body>
<font size=6><img src="images/topbkg.jpg" width="1353" height="164" /></font>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
   echo "<br><br><br><div class=head1><h1>Login id  exist<h1></div>";
}



$query="insert into user(login,pass,username,address,city,phone,email) values('$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("could not perform query");
echo "<br><br><br><div class=head1><h1 align=center><font color=red> <i> $lid </i> Login ID  Created Sucessfully</h1></div>";
echo "<br><div class=head1><h2 align=center>Please Login  go to webside</h2></div>";
echo "<br><div class=head1><h2 align=center><a href=login.php>Login</a></h2></font></div>";


?>
</body>
</html>
