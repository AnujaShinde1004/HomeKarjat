<?php 

 session_start();
if(!isset($_SESSION['stat']))
header("location:index.php?msg=Kindly login first");
 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Untitled Document</title>
 <script>
function showText(text){
    document.getElementById("text").innerHTML=text;
}
function hide(){
    document.getElementById("text").innerHTML="";
}
</script>

</head>

<body >
<font size=6 color="blue"> <h1 align="center">Welcome Anuja Shinde <br> &<br> Kirti Raut</h1></font><br>
<h1 align="center"><div id="text"></div></h1>

  <table width="1344"  height="188"  align="center">
  <tr>
    <td height="182" colspan="2" align="center">	
	 <p>
    <a href="user reg.php"> <img src="../images/register button.jpg" width="100" height="124" align="center" valign="center" id="image" onMouseOver="showText('view user detail')" onMouseOut="hide();"/ ></a>
	<a href="../homepage.php"><img src="../images/20161202065929.jpg" width="100" height="124" align="center" valign="center" id="image" onMouseOver="showText('go to homepage')" onMouseOut="hide();"/></a>
	<a href="../avilleges/index.php"><img src="../images/village.jpg" width="100" height="122" align="center" valign="center" id="image" onMouseOver="showText('add village')" onMouseOut="hide();"/></a>
	<a href="feedback.php"><img src="../images/feedback.jpg" width="100" height="124" align="center" valign="center" id="image" onMouseOver="showText('view feedback')" onMouseOut="hide();"/></a>
	<a href="../population/index.php"><img src="../images/image.jpg" width="100" height="122" align="center" valign="center" id="image" onMouseOver="showText('add population')" onMouseOut="hide();"/></a>
	<a href="../rainfall/index.php"><img src="../images/Rain1.png" width="100" height="122" align="center" valign="center" id="image" onMouseOver="showText('add rainfall')" onMouseOut="hide();"/></a> </a><a href="logout.php"><img src="../images/logout.png" width="100" height="124" align="center" valign="center" id="image" onMouseOver="showText('admin logout')" onMouseOut="hide();"/></a>	 </p>    </td>
</tr> 
</table>



</body>
</html>

 