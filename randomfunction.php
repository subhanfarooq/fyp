<?php 
$digit = rand (1,4);
$digit2 = rand (5,9);
$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);
$password=$digit.$s.$z.$q.$digit2.$t;
?>