<?php
include("conn.php");
	$sel=mysql_query("select * from population where rid=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['year'];
	$b=$row['male'];
	$c=$row['female'];
	$d=$row['population'];
	$e=$row['percentage'];
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="38%" height="103" border="1">
      <tr>
        <td colspan="3" align="center">Population Information </td>
        </tr>
      <tr>
        <td width="47%">Year</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>Male</td>
        <td>:</td>
        <td><?php echo $b; ?></td>
      </tr>
      <tr>
        <td>Female</td>
        <td>:</td>
        <td><?php echo $c; ?></td>
      </tr>
      <tr>
        <td>Population</td>
        <td>:</td>
        <td><?php echo $d; ?></td>
      </tr>
      <tr>
        <td>Percentage</td>
        <td>:</td>
        <td><?php echo $e; ?></td>
      </tr>
      
	  <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="index.php">Back</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
