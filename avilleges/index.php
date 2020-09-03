<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <a href="../login form/dashboard.php"><img src="../images/curved-arrow-clipart_20.png" height="70" width="80"></a>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="50%" border="1">
      <tr>
        <td></td><td></td><td><div align="right">
		<a href="add.php"><img src="../images/blue_plus.png" width="39" height="37"></a></div></td>
       
     
      </tr>
      <tr>
        <td width="7%">Sr.No.</td>
        <td width="32%">vname</td>
        <td width="25%">population</td>
        
      </tr>
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
$sel=mysql_query("select * from village");
$i=0;
while($row=mysql_fetch_array($sel))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['vname']."</td>
        <td>".$row['pop']."</td>
		
      </tr>";
	  }
	  
	  ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="90%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
  </tr>
</table>

</body>
</html>
