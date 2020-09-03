<?php 

if(isset($_POST['sub']))
{

  if($_POST['uname']!="")
  {
 	 if($_POST['pswd']!="")
  	{
	//mysql_num_rows()==1
	mysql_connect("localhost","root","");
	mysql_select_db("karjat");
	$res=mysql_query("select * from admin where uname='".$_POST['uname']."' and pswd='".$_POST['pswd']."'");
  			//if($_POST['uname']=="admin" && $_POST['pswd']=="admin")
  			
			if(mysql_num_rows($res)==1)
			{		
			session_start();
			$_SESSION['stat']="Login";
				  
				header("location:dashboard.php");
			 }else
	   header("location:index.php?msg=Invalid user name or password");
 		 }else
	header("location:index.php?msg=Kindly enter password");
  }else
header("location:index.php?msg=Kindly enter user name");

}else
header("location:index.php?msg=Kindly Click on Login Button");



?>