<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM home_page';
$query=mysql_query($sql);
?>
<nav>
	<p id="nav">
	<table width="35%" cellpadding="0" cellspacing="0" border="0">

											<tr>
                                                

<?php
while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
  



										
										echo		"<td align='center'><a href=$row[title_page] >$row[title]</a></td>";
										echo "<td><img src='images/TopMenuDivider.jpg'></td>";	
}
									?>	
											</tr>

										</table>

	</p>
</nav>