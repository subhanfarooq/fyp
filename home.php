<nav>
	<p id="nav">
	<table width="55%" cellpadding="0" cellspacing="0" border="0">

					<tr>

<?php
   /*first including database with location in htdoc*/
   include("includes/database.php");
   
   /* creating variable and storing and selecting database*/
   $query = "select * from  home_page";
   
   /*runnig query or execting querry*/
   $run_cats = mysql_query($query);
   
 /*  record will be displayed if many records in database*/
   while($row=mysql_fetch_array($run_cats)){
	   
	   /*making local variables*/
	     $cat_id=$row['id'];
		 $cat_title=$row['title'];
		
		
		echo "
		                        <td align='center'><a href='index.php?cat=$cat_id'>$cat_title</td>

								<td><img src='images/TopMenuDivider.jpg'></td>

							
		
		"; 
	   }
	   
   ?>

								

											</tr>

										</table>

	</p>
</nav>