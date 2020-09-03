<?php
session_start();
?>

<html>
<head>
<title>Wel come to homekarjat login</title>


<script type="text/javascript">
function login()
{
 alert("login successfully");
 }
 </script></head>
 <body>
 
<font size=6> <img src="images/topbkg.jpg" width="1353" height="164" /></font>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query("select * from user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
echo "<h1 class='style8' align=center></h1>";
		echo '<br><br><a href="homepage.php" class="style4"><img src="images/20161202065929.jpg" height=250 width=250 align="right"></a>
		<font size="6"><h1 align="center">Welcome to homekarjat. This side provide the information about karjat city. to see the useful information click on image. </font>
		';
 
		exit;
		

}

?>
<table width="100%" border="0" align="right">
  <tr>
    <td width="52%" height="63">&nbsp;</td>
   
    <td width="48%"><div align="center"><font size="6">User Login </font></div></td>
  </tr>
  <tr>
    <td height="372"><div align="center"><marquee  direction="right" id='img'>
	  <div onMouseOver="document.getElementById('img').stop();" onMouseOut="document.getElementById('img').start();">
	   	
    <img src="images/login-button-png-1.png" width="668" height="398"></td>   </div>
	  </marquee>	
    <td valign="top"><form name="form1" method="post" action="">
      <table width="543" border="0">
        <tr>
          <td width="242" height="75"><div align="center"><span class="style2">Login ID </span></div></td>
          <td width="291"><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td height="57"><div align="center"><span class="style2">Password</span></div></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td height="27" colspan="2"><div align="center"><span class="errors">
              <?php
		  if(isset($found))
		  {
		  	echo "Invalid login ID or Password";
			echo "<script>alert('type valid id & pass')</script>";
		  }
		  ?>
          </span></div></td>
        </tr>
        <tr>
          <td height="56" colspan=2 align=center class="errors"><input name="submit" type="submit" id="submit" value="Login">          </td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>

</body>
</html>
