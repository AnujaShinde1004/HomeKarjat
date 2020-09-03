


<html>
<head>
<title>Wel come to homekarjat login</title>


<script type="text/javascript">
function login()
{
 alert("send feedback succesfully");
 }
 </script></head>

 
<body bgcolor="#e1f3f5">

<?php
include("header.php");
?>

<table width="1355" height="69" border="0">
<tr><th width="1359" height="65" bgcolor="#8cdbc1" scope="col"><font color="#1414f5" size=9><i><b>Feedback</b></i></font></th>
</tr></table>

<table width="1355" height="59" border="0">
<tr><td height="55" align="center" bgcolor="#c3e2e3"> 
<a href="../homepage.php"><input type="button" value="Home"></a>&nbsp;&nbsp; &nbsp; &nbsp;    
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





<img src ="../images/20161207114442.jpg" height=250 width=1000>
<br>
<form name="form1" method="post" action="#">
<font color="blue" size=5 >
&nbsp;&nbsp;&nbsp;User name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name" placeholder="enter name" required><br><br>
&nbsp;&nbsp;&nbsp;Email_id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="email" placeholder="enter valid email" required><br><br>
&nbsp;&nbsp;
Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="2" cols="25" id="message" name="message"  placeholder="enter comment" required></textarea><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="Submit" value="submit" onClick="login()">&nbsp;&nbsp;&nbsp;<input type="reset" value="reset">
</form>
<?php
		
		if(isset($_POST["Submit"]))
		{
            $con=mysql_connect('localhost','root','');
            $db_selected=mysql_select_db("karjat",$con);
            $mysql="INSERT INTO feedback(name,email,message) VAlUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
            mysql_query($mysql,$con);
            mysql_close($con);
		}
?>



</table>
</body>
</html>
