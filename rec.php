<?php 
$num_rec_per_page=4;
mysql_connect('localhost','root','');
mysql_select_db('webdesigning2');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM students LIMIT $start_from, $num_rec_per_page"; 
$query = mysql_query ($sql); //run the query
?> 
<table>
<tr>
<td><b>S:No</b></td>
<td><b>Name</b></td>
<td><b>Password</b></td>
</tr>
<?php 
$serial=1;
while ($row = mysql_fetch_assoc($query)) { 
?> 
            <tr>
			<td><?php echo $serial ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['pass_word']; ?></td>            
            </tr>
<?php
$serial=$serial+1;
 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM students"; 
$query = mysql_query($sql); //run the query
$total_records = mysql_num_rows($query);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

//echo "<a href='pagination.php?page=1'>".'|<'."</a> "; // Goto 1st page 
 

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='?page=".$i."'>".$i."</a> "; 
			 
}; 
//echo "<a href='pagination.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>