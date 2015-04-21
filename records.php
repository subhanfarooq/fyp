<?php 
$db = mysql_connect("localhost","root","");

//mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$page=(isset($_GET['page']) && $_GET['page'] > 0) ? (int)$_GET['page'] :1;
$perpage=10;

$limit=($page > 1)? ($page * $perpage) - $perpage : 0;
$query=mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM  students LIMIT {$limit}, {$perpage}");
//$records = mysql_fetch_assoc($query);
$records = mysql_query ($query); //run the query

$total = mysql_query("SELECT FOUND_ROWS() as total");
$total = mysql_fetch_assoc($total);

print_r($total);

$pages= ceil($total/$perpage);
echo $pages;

?>


<html>
<head></head>
<body>
<div>
<a href="?page=<?php $pagep =$page-1; echo $pagep; ?>">Prev</a>
<?php for($i=1; $i<=$pages; $i++); ?>
  <a href="?page=<?php echo $i ?><?php echo $i ?></a>

  <a href="?page=<?php $page+1; echo $pagen; ?>">Next </a>
</div>

<table>
<tr>
    <th></th>
	<th></th>
</tr>
<?php foreach($records as $record); ?>
<tr>
<td><?php echo $record[0]; ?></td>
<td><?php echo $record[4]; ?></td>
</tr>

</body>
</html>