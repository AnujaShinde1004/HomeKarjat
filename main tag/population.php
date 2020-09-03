<html>
<body bgcolor="#e1f3f5">

<?php
include("header.php");
?>

<table width="1355" height="69" border="0">
<tr><th width="1359" height="65" bgcolor="#8cdbc1" scope="col"><font color="#1414f5" size=9><i><b>Population</b></i></font></th>
</tr></table>

<table width="1355" height="59" border="0">
<tr><td height="55" align="center" bgcolor="#c3e2e3"> 
<a href="../homepage.php">
<input type="button" value="Home"></a>&nbsp;&nbsp; &nbsp; &nbsp;    
<a href="../main tag/aboutus.php"><input type="button" value="About"></a>&nbsp;&nbsp; &nbsp; &nbsp;   
<a href="../main tag/map.php"><input type="button" value="Map"></a>&nbsp;&nbsp; &nbsp; &nbsp; 
<a href="../main tag/area.php"><input type="button" value="Area"></a>&nbsp;&nbsp; &nbsp; &nbsp; 
<a href="../villages/index.php"><input type="button" value="Villages"></a>&nbsp;&nbsp; &nbsp;  &nbsp; 
<a href="../main tag/rainfall.php"><input type="button" value="Rainfall"></a>&nbsp;&nbsp; &nbsp;  &nbsp; 
<a href="../main tag/population.php"><input type="button" value="Population"></a>&nbsp;&nbsp; &nbsp;  &nbsp;
<a href="../main tag/gallery.php"><input type="button" value="Gallery"></a>&nbsp;&nbsp; &nbsp; &nbsp; 
<a href="../school/school.php"><input type="button" value="School"></a>&nbsp;&nbsp; &nbsp; &nbsp; 
<a href="../colleges/college.php"><input type="button" value="Colleges"></a>&nbsp;&nbsp; &nbsp; &nbsp; 
<a href="../temple/temple.php"><input type="button" value="Temple"></a>&nbsp;&nbsp; &nbsp; &nbsp; 

<a href="../main tag/feedback.php"><input type="button" value="Feedback"></a>&nbsp;&nbsp; &nbsp; &nbsp;  
</td></tr></table><br>

<br><h1 align="center"><font size=5>The table below shows population of taluka by Gender as per 2001 census....</h1> 

<table border="2" align="center" height="88" width="695">
<caption><font color="red" size=6>Population</font></caption>
<tr>
<th height="80" align="center"><b>Sr.No</b></th>
<th align="center"><b>Year</b></th>
<th align="center"><b>Male</b></th>
<th align="center"><b>Female</b></th>
<th align="center"><b>Total Population</b></th>
<th align="center"><b>Percentage of population</b></th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("karjat");
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
        </tr>";
	  }
?>
</table>
</body>
</html>