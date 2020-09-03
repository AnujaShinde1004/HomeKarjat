<?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
//select record
$result=mysql_query("SELECT * FROM population where rid=".$_GET['id']."");
while($row=mysql_fetch_array($result))
{
echo "<br>";
$a=$row['year'];
$b=$row['male'];
$c=$row['female'];
$d=$row['population'];
$e=$row['percentage'];
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
    <td><input type="text" name="year" value="<?php  echo $a;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Male</td>
    <td>:</td>
    <td><input type="text" name="male" value="<?php  echo $b;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Female</td>
    <td>:</td>
    <td><input type="text" name="female" value="<?php  echo $c;?>" ?></td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td>Population</td>
    <td>:</td>
    <td><input type="text" name="population" value="<?php  echo $d;?>" ?></td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td>Percentage</td>
    <td>:</td>
    <td><input type="text" name="percentage" value="<?php  echo $e;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add">
      <a href="index.php" style="text-decoration:none;">Population List</a></td>
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
$sql=("update population set year='".$_POST['year']."',male='".$_POST['male']."',female='".$_POST['female']."',population='".$_POST['population']."',percentage='".$_POST['percentage']."' where rid=".$_GET['id']."");
}
?>