<?php @session_start();
// store session data
$id = $_GET['id'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 



$query="delete from home_page where id='$id'";
$db->exec($query);

echo "<script>window.open('design.php?Deleted=A Title has been Deleted you may check.......!','_self')</script>";
	?>
