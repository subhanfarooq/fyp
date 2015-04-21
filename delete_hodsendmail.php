<?php
// database connectivity
mysql_connect("localhost","root","");
mysql_select_db("webdesigning2");

$del_pagehof=$_GET['del_pagehof'];
//here del_page is the get variable in inboxcomplaintmanager.php

$query="delete from  hod_studentmail where id='$del_pagehof'";

if (mysql_query($query))
echo"<script>window.open('studentwelcomepage.php?deletedhod=A Complaint Has been deleted.......!','_self')</script>";
// here above line we have again create another GET variable name is deleted we call it any where

?>