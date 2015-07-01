<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$delete_page=$_GET['del_own_hodmail'];
//here del_page is the get variable in inboxcomplaintmanager.php

$query="delete from  hod_reply where complaint_id='$delete_page'";

if (mysql_query($query))
echo"<script>window.open('hod.php?deleted=A Complaint Has been deleted.......!','_self')</script>";
// here above line we have again create another GET variable name is deleted we call it any where

?>