

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
<table width="100%" border="1">
  <tr>
    <td width="23%">&nbsp;</td>
    <td colspan="3" valign="middle" align="center">Add Record </td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="18%" valign="middle" align="right">Year</td>
    <td width="2%">:</td>
    <td width="37%"><input type="text" name="year"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Male</td>
    <td>:</td>
    <td><input type="text" name="male"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Female</td>
    <td>:</td>
    <td><input type="text" name="female"></td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Population</td>
    <td>:</td>
    <td><input type="text" name="population"></td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Percentage</td>
    <td>:</td>
    <td><input type="text" name="percentage"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add"> 
      <a href="index.php" style="text-decoration:none;">Back</a> </td>
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
<?php
 
if(isset($_POST['sub']))
{
$con=mysql_connect("localhost","root","");
$db_selected=mysql_select_db("karjat");
$mysql="INSERT INTO population(year,male,female,population,percentage) values('".$_POST['year']."','".$_POST['male']."','".$_POST['female']."','".$_POST['population']."','".$_POST['percentage']."')";
mysql_query($mysql,$con);
mysql_close($con);

} 
?>


</body></html>