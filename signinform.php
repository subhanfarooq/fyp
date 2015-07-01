<?php session_start();
if(isset($_SESSION['reg_no']))
{
include_once 'function/functions.php';
//this is the ending of include folder

// making a variable object for database 
$obj= new database();

 $db=$obj-> connection();
$username=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];

$query="select * from   students where reg_no='$username' AND pass_word='$password'"; 


$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['reg_no'] && $password==$result['pass_word'])
	
	{
	
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
header("Location:adminsection.php");

}

else{//Selection data from data base so we using sql database
$query="select * from   complaint_manager where user_name='$username' AND pass_word='$password'"; 
// u_name is name from database where $user_name is declared variables calling

$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['user_name'] && $password==$result['pass_word'])
	
	{
header("Location:complaintmanagersection.php");

}





else{
//Selection data from data base so we using sql database
$query="select * from    head_of_department where user_name='$username' AND pass_word='$password'"; 
// u_name is name from database where $user_name is declared variables calling

$result=$db->query($query);

$result=$result->fetch();
if ($username==$result['user_name'] && $password==$result['pass_word'])
	
	{
//opne the complaint manager section
header("Location:hod.php");

}



}}
}

}
else
{
?>
<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet"	href="css/mystyle.css" />
	<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
</head>
<body>	

<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->
<a class="back" href="index.php"><font color=" white">Back</font></a>
<br>
<!-- this is the get variable for password successfully changes-->
<h2><font color="red"><?php echo $_GET[updatepass]; ?></font></h2> 

<center>
<!--this is the starting of the form -->
	<form class="loginform group" action="submitsinginform.php" method="post">
	
		<h2>Singin</h2>
		<p>Sign in below</p>
		<label for="myname">Username</label>
		<input type="text" name="username" value=""  placeholder="Please give username" required /> 
	
		<label for="mypassword">Password</label>
		<input type="password" name="password" value="" placeholder="Password"  required /> 
	
		 <button type="submit" name="login" >Login</button>
	</form>
	<br>
	
	<!-- call this globle get varible from submitsigninform.php to show the msg that user id or password is wrong on the page below form-->
        <h3><font color="blue"> <?php echo $_GET[wrong]; ?></font></h3> 
		 
        
<br><br><br><br><br><br><br><br><br>


<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->

<br>

</body>
</html>



<?php 	


}

?>
