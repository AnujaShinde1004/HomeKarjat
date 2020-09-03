<?php 
mysql_connect("localhost","root","");
mysql_select_db("karjat");
function sel_row()
{
$sel=mysql_query("select * from population");
	$i=0;
	while($row=mysql_fetch_array($sel))
	{
	$i++;
 echo " <tr>
        <td>$i</td>
        <td>".$row['year']."</td>
        <td>".$row['male']."</td>
		<td>".$row['female']."</td>
        <td>".$row['population']."</td>
		<td>".$row['percentage']."</td>
        <td><a href=\"index.php?page=viw&rid=".$row['rid']."\">View</a></td>
        <td><a href=\"index.php?page=edt&rid=".$row['rid']."\">Edit</a></td>
        <td><a href=\"index.php?page=del&rid=".$row['rid']."\">Delete</a></td>
      </tr>";
	  }

}
function del_row()
{
if(mysql_query("delete from population where id=".$_GET['rid']))
header("location:index.php");
else
echo mysql_error();

}
function viw_row()
{
	$sel=mysql_query("select * from population where id=".$_GET['rid']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['year'];
	$b=$row['male'];
	$c=$row['female'];
	$d=$row['population'];
	$e=$row['percentage'];
	
	}
?>

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
<?php

}

?>