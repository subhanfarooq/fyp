<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderindexpage.css" />

</head>
<body>	



<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->

<a href="adminsection.php">BACK</a>
 </a>


<?php

/* this is database creating and connecting to it */
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");
 
/*selecting database for fetching the complaints of students  */
$sql = 'SELECT * FROM home_page';
$query=mysql_query($sql);
?>

	


											
                                                

<?php
while($row = mysql_fetch_assoc($query))  //Fetch a result row as an associative array
  {
  
  



										
										echo"   <table bgcolor='#FFE0C0' border='1'>
										
										<tr><td> <a href=$row[title_page] >$row[title]</a></td> 
									
									<td align='center' style='color:black'> <a href=\"admindelpost.php?id={$row['id']}\">Delete</a></td>
</tr></table><br>";
									}
									?>	
					
	
	 
<br><br><br><br><br><br><br><br><br><br><br><br>



<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!-- this is the hit counter in footer-->

<!--this is the footer end section -->


<!--<div align='center'><a href='http://www.hit-counts.com'><img src='http://www.hit-counts.com/counter.php?t=MTM1ODg0MA==' border='0' alt='Web Counter'></a><BR><a href='http://www.hit-counts.com'>Web Counter</a></div>
this is example of hit counter
-->

</body>
</html>
