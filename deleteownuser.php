<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$delete_own=$_GET['delownuser'];
//here del_page is the get variable in inboxcomplaintmanager.php

$query="delete from complaint_types where id='$delete_own'";

if (mysql_query($query))
echo"<script>window.open('studentwelcomepage.php?deleted=A Complaint Has been deleted.......!','_self')</script>";
// here above line we have again create another GET variable name is deleted we call it any where

?>