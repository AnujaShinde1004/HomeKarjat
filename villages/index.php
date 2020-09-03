<html>
<body bgcolor="#e1f3f5">
<table border="0" align="right">
  <tr><td><font size=4 color="blue">
    <div align=\"right\"><a href="../index.php">Welcome page</a>
    |<a href="../signout.php">signout</a></div></font>
</tr>
</table>
<table width="1349" height="69" border="0">
<tr><th width="1343" height="65" bgcolor="#8cdbc1" scope="col"><font color="#1414f5" size=9><i><b>Villeges</b></i></font></th>
</tr></table>

<table width="1347" height="59" border="0">
<tr><td width="1341" height="55" align="center" bgcolor="#c3e2e3"> 
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
</td></tr></table>

<div id="content" class="mw-body" role="main">
<span class="firstHeading">
<a href="../homepage.php" ><img src="../images/karjat.jpg" width="205" height="124" align="left"><span class="firstHeading"></a>
<a href="rehkuri.php" ><img src="../images/antelope-blackbuck-wallpaper.jpg" width="187" height="136" align="right"></a>
<h1 align="center" class="firstHeading" id="firstHeading" lang="en">List of villages in Karjat taluka<a href="rehkuri.php" ></a> <a href="rehkuri.php" ></a></h1>
									<script>function mfTempOpenSection(id){var block=document.getElementById("mf-section-"+id);block.className+=" open-block";block.previousSibling.className+=" open-block";}</script>
									<p align="center"> There are around 120 villages in Karjat taluka in the Ahmednagar district of state of Maharashtra.Following are the list of villages in Karjat taluka.</p>
									
									<p>&nbsp;</p>
									<p align="right">rehkuri</p>
									
						
						
<?php
$db=mysql_connect("localhost","root","");
$er=mysql_select_db("karjat");
//$query="insert into rname(Names,Address1,Address2,E-mail id) values('$name','$add1','$add1','$mail')";
//$result=mysql_query($query);

$result1=mysql_query("select * from village");
?>
<html>
<body>

<table width="500" border="2" align="center">
<caption><h1>Villeges in karjat</h1></caption>
<tr>
<th>id</th>
<th>village name</th>
<th>population</th>

</tr>
<?php
while($array=mysql_fetch_row($result1))
{
print"<tr><td>";
echo $array[0];
print"</td><td>";
echo $array[1];
print"</td><td>";
echo $array[2];
print"</td></tr>";


}
?>
</body>
</html>				
									
</body>
  </html>
  
  
     
