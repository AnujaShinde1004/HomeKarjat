<?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
//select record
$result=mysql_query("SELECT * FROM rain where rid=".$_GET['id']."");
while($row=mysql_fetch_array($result))
{
echo "<br>";
$a=$row['Year'];
$b=$row['Rainfall'];
echo "<br>";
}
?>
<html>
<head>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td align="center" valign="middle">Edit Record </td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>
          <form name="form1" method="post" action="" >
	
        <table width="100%" border="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="20%">
	<?php 
	//if(isset($msg)) 
     	//{ 
	      //  echo $msg;  
	      //  $msg="";
	    //} 
		?>
		</td>
    <td width="2%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Year</td>
    <td>:</td>
    <td><input type="text" name="Year" value="<?php  echo $a;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Rainfall</td>
    <td>:</td>
    <td><input type="text" name="Rainfall" value="<?php  echo $b;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add">
      <a href="index.php" style="text-decoration:none;">Rainfall List</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
          </form>
        </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
//Update Query
 if(isset($_POST['sub']))
{
$sql=("update rain set Year='".$_POST['Year']."',Rainfall='".$_POST['Rainfall']."' where rid=".$_GET['id']."");
if(!mysql_query($sql))
{
die ('<br> Error:<br>'.mysql_error());
}
else
echo "<br> Record Updated <br>";
}
?>