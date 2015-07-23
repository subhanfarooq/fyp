<?php
session_start();
session_destroy();

echo"<script>window.open('signinform.php?logout=You have successfully logout','_self')</script>";
?>