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
    <td><table width="100%" border="1">
      <tr>
        <td colspan="4">&nbsp;</td>
        <td><a href="add.php"><img src="../images/blue_plus.png" width="39" height="37"></a></td>
        <td><img src="../images/error.png" width="39" height="37"></td>
      </tr>
      <tr>
        <td width="7%">Sr.No.</td>
        <td width="32%">Year</td>
        <td width="25%">Rainfall</td>
        <td width="5%">View</td>
        <td width="7%">Edit</td>
        <td width="5%">Delete</td>
      </tr>
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
$sel=mysql_query("select * from rain");
$i=0;
while($row=mysql_fetch_array($sel))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['Year']."</td>
        <td>".$row['Rainfall']."</td>
        <td><a href=\"view.php?id=".$row['rid']."\" >View</a></td>
        <td><a href=\"edit.php?id=".$row['rid']."\" >Edit</a></td>
        <td><a href=\"delete.php?id=".$row['rid']."\" >Delete</a></td>
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
