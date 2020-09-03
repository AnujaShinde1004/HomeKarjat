<?php 
mysql_connect("localhost","root","");
mysql_select_db("karjat");
function sel_row()
{
$sel=mysql_query("select * from rain");
	$i=0;
	while($row=mysql_fetch_array($sel))
	{
	$i++;
 echo " <tr>
        <td>$i</td>
        <td>".$row['Year']."</td>
        <td>".$row['Rainfall']."</td>
        <td><a href=\"index.php?page=viw&rid=".$row['rid']."\">V</a></td>
        <td><a href=\"index.php?page=edt&rid=".$row['rid']."\">E</a></td>
        <td><a href=\"index.php?page=del&rid=".$row['rid']."\">D</a></td>
      </tr>";
	  }

}
function del_row()
{
if(mysql_query("delete from rain where id=".$_GET['rid']))
header("location:index.php");
else
echo mysql_error();

}
function viw_row()
{
	$sel=mysql_query("select * from rain where id=".$_GET['rid']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$usrnm=$row['Year'];
	$usrpsd=$row['Rainfall'];
	}
?>
<table width="38%" height="103" border="1">
      <tr>
        <td colspan="3" align="center">User Information </td>
        </tr>
      <tr>
        <td width="47%">User Name </td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $usrnm; ?></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $usrpsd; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="usr_list.php">Back</a></td>
      </tr>
    </table>
<?php

}

?>