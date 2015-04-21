<?php session_start();	


$username=$_POST['username'];
$password=$_POST['password'];

// making session varibale name as reg_no you may give any name to it and then we call it any where and we make it equal to $username because it is the form filling name

// this is the ending of post variables

// we are including function file from function folder where we have made the data base and use use it here
include_once 'function/functions.php';
//this is the ending of include folder

// making a variable object for database 
$obj= new database();

 $db=$obj-> connection();
// now we are calling the connection from function file

 //Selection data from data base so we using sql database
$query="select * from   students where reg_no='$username' AND pass_word='$password'"; 


$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['reg_no'] && $password==$result['pass_word'])
	
	{
	$_SESSION['reg_no']=$username;
$_SESSION['pass_word']=$password;
	header("Location:studentwelcomepage.php");

}

else{
//Selection data from data base so we using sql database
$query="select * from   administrator where user_name='$username' AND pass_word='$password'"; 
// u_name is name from database where $user_name is declared variables calling

$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['user_name'] && $password==$result['pass_word'])
	
	{
	$_SESSION['reg_no']=$username;
$_SESSION['pass_word']=$password;
	
include('adminsection.php');
}

else{//Selection data from data base so we using sql database
$query="select * from   complaint_manager where user_name='$username' AND pass_word='$password'"; 
// u_name is name from database where $user_name is declared variables calling

$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['user_name'] && $password==$result['pass_word'])
	
	{
	
	$_SESSION['reg_no']=$username;
$_SESSION['pass_word']=$password;
//opne the complaint manager section
include('complaintmanagersection.php');
}





else{
//Selection data from data base so we using sql database
$query="select * from    head_of_department where user_name='$username' AND pass_word='$password'"; 
// u_name is name from database where $user_name is declared variables calling

$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['user_name'] && $password==$result['pass_word'])
	
	{
	$_SESSION['reg_no']=$username;
$_SESSION['pass_word']=$password;
//opne the complaint manager section
include('hod.php');
}




else{
// open the sigin form you have wrong password or reg no it will redirect to signinform.php
echo"<script>window.open('signinform.php?wrong=Wrong id or password.......!','_self')</script>";
}
}}
}


?>

