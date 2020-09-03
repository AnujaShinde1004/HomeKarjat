  <html>
<head>
<title>Search</title>
</head>
<body>

<center>
  <table border="0" align="right">
    <tr>
      <td><div align=\"right\"><font color="blue" size="4"><a href="../index.php">Welcome page</a> |<a href="../signout.php">signout</a></font></div>
    </tr>
  </table>
  <table width="1355" height="69" border="0">
    <tr>
      <th width="1359" height="65" bgcolor="#8cdbc1" scope="col"><font color="#1414f5" size=9><i><b>Villeges</b></i></font></th>
    </tr>
  </table>
  <table width="1355" height="59" border="0">
    <tr>
      <td height="55" align="center" bgcolor="#c3e2e3"><a href="../homepage.php">
        <input name="button" type="button" value="Home">
        </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../main tag/aboutus.php">
          <input name="button2" type="button" value="About">
          </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../main tag/map.php">
            <input name="button2" type="button" value="Map">
            </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../main tag/area.php">
              <input name="button2" type="button" value="Area">
              </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../villages/index.php">
                <input name="button2" type="button" value="Villages">
                </a>&nbsp;&nbsp; &nbsp;  &nbsp; <a href="../main tag/rainfall.php">
                  <input name="button2" type="button" value="Rainfall">
                  </a>&nbsp;&nbsp; &nbsp;  &nbsp; <a href="../main tag/population.php">
                    <input name="button2" type="button" value="Population">
                    </a>&nbsp;&nbsp; &nbsp;  &nbsp; <a href="../main tag/gallery.php">
                      <input name="button2" type="button" value="Gallery">
                      </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../school/school.php">
                        <input name="button2" type="button" value="School">
                        </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../colleges/college.php">
                          <input name="button2" type="button" value="Colleges">
                          </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../temple/temple.php">
                            <input name="button2" type="button" value="Temple">
                            </a>&nbsp;&nbsp; &nbsp; &nbsp; <a href="../main tag/feedback.php">
                              <input name="button2" type="button" value="Feedback">
                            </a>&nbsp;&nbsp; &nbsp; &nbsp; </td>
    </tr>
  </table>
  <div id="content" class="mw-body" role="main">
  <span class="firstHeading"> <a href="../homepage.php" ><img src="../images/karjat.jpg" alt="asdfd" width="205" height="124" align="left"><span class="firstHeading"></a> <a href="rehkuri.php" ><img src="../images/antelope-blackbuck-wallpaper.jpg" alt="assdd" width="187" height="136" align="right"></a>
  <h1 align="center" class="firstHeading" id="firstHeading" lang="en">List of villages in Karjat taluka<a href="rehkuri.php" ></a> <a href="rehkuri.php" ></a></h1>
  <script>function mfTempOpenSection(id){var block=document.getElementById("mf-section-"+id);block.className+=" open-block";block.previousSibling.className+=" open-block";}</script>
  <p align="center"> There are around 120 villages in Karjat taluka in the Ahmednagar district of state of Maharashtra.Following are the list of villages in Karjat taluka.</p>
  <p>&nbsp;</p>
  <p> <a href="index.php"><img src="../images/curved-arrow-clipart_20.png" width="91" height="68" align="left"></a></p>
  <h1 align="center">Search Result</h1>

<div align="center">
  <table border="1" height="67" width="900" >
    <tr style='color:#5b91a2; font-size:23px;'>
      <th height="61">Id</th>
							    <th>vname </th>
							    <th>population</th>
  </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text=="txtsearch")
		{
			echo "No villege....Please Try Again!!!"."<br>";
		  }
	?>
    <?php
	mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("karjat");
		$cbo = $_POST['vsearch'];
		$search = $_POST['txtsearch'];
		
	?>
    <?php
		
		 if($cbo=="VName")
		{
			$na = mysql_query("SELECT * FROM villege WHERE vname like '".$search."%'");
	?>
    <?php
	$i=0;
		while($result=mysql_fetch_array($na))
		{
	              $i++;
			echo " <tr>
        <td>$i</td>
        <td style='color:#ff0000; font-size:25px;'>".$result['vname']."</td>
        <td style='color:#ff0000; font-size:25px;'>".$result['pop']."</td>
        
        </tr>";
		   ?>
                      <?php
				}
				}
			?>  
  </table>
</div>
</body>
</html>                              
