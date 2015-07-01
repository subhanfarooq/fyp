<center><img src="images/FooterBar.jpg" width="99%" height="7"></center>
<center> 
<font size="2"><b>
<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM copyright';
$query=mysql_query($sql);
?>
<?php
while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {	
										echo		"  $row[copyright_title] ";
}
	?>									
										</b></font>
</center>
<center>
<td class="freetext"  " align="center">
							
							<a href="site.php" class="red">Site Credits</a> | <a href="us.php" class="red">Contact</a><br>
						<font size="1"><b>	Best view 1024x768, 800x600 Internet Explorer 7 or greater and any other search engine.</b></font>

					  </td>
</center>