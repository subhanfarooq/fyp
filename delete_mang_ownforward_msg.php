<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$delete_page=$_GET['del_pag'];


$query="delete from  hod_forwardreply_by_compmang where id='$delete_page'";

if (mysql_query($query))
echo"<script>window.open('complaintmanagersection.php?deleted=A Complaint Has been deleted.......!','_self')</script>";
// here above line we have again create another GET variable name is deleted we call it any where

?>