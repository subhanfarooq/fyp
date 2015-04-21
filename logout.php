<?php
session_start();
session_destroy();

echo"<script>window.open('signinform.php','_self')</script>";
?>