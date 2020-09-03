<?php
include("conn.php");
	$sel=mysql_query("select * from rain where rid=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$usrnm=$row['Year'];
	$usrpsd=$row['Rainfall'];
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
        <td colspan="3" align="center">Rainfall Information </td>
        </tr>
      <tr>
        <td width="47%">Year</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $usrnm; ?></td>
      </tr>
      <tr>
        <td>Rainfall</td>
        <td>:</td>
        <td><?php echo $usrpsd; ?></td>
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
