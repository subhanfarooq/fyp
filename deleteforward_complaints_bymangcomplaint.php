<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$delete_comp=$_GET['del_com'];
//here del_page is the get variable in inboxcomplaintmanager.php

$query="delete from  hod_forwardreply_by_compmang where id='$delete_comp'";

if (mysql_query($query))
echo"<script>window.open('forwardmail.php?deleted=A Complaint Has been deleted.......!','_self')</script>";
// here above line we have again create another GET variable name is deleted we call it any where

?>