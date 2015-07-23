<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
/*
$_SESSION['reg_no']=$_POST['username'];  // session varible name as reg_no its not database name be remember and post(regno) is the form varible
$_SESSION['pass_word']=$_POST['password'];
*/
?>

<!-- this is the rendom password generator-->
<?php 
$digit = rand (1,4);
$digit2 = rand (5,9);
$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);

$password=$digit.$s.$z.$q.$digit2.$t;

//this is the rendom password generator end  we called this $password in form field

?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />	
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
<link rel="stylesheet" type="text/css" href="css/admindeleteuser.css" />
<link rel="stylesheet" type="text/css" href="css/submitbuttonupdate.css">
</style>
<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 
</head>
<body><br>
 <a class="back" href="adminsection.php">BACK</a>
 </a>
 <center><h2><?php echo $_GET[Add]; ?> </h2></center>    

<!--<center><h2>Add User here by putting information Here</h2></center>  -->

<br>
<center><div id="view-wrapper">

	<form action="adminaddusers.php" method="post">
	  <table bgcolor="#FFE0C0" border="1">
	  
	  <td colspan="2"><center><h3>Add User here by putting information Here</h3></center></td>
        <tr>
          <td><b>Name: </td>
          <td><input id="text3" type="text" name="name" value="" required></td>
        </tr>
        <tr>
          <td><b>Registration NO: </td>
          <td><input id="text3" type="text" name="regno"  value="" required ></td>
        </tr>
        <tr>
          <td><b>Password: </td>
          <td><input id="text3" type="text" name="pass"  value="<?php echo $password; ?>"/></td>
        </tr>
        <tr>
          <td><b>Email Adress: </td>
          <td><input id="text3" type="text" name="email"  value="" required ></td>
        </tr>
        <tr>
          <td><b>Date Of Registration: </td>
          <td><input id="text3" type="date" name="date"  value="" required ></td>
        </tr>
        <tr>
          <td><b>Contact: </td>
          <td><input id="text3" type="text" name="contact"  value="" required ></td>
        </tr>
        <td colspan="2">
		<!-- this id=shiny is called from css page submittbuttonupdate.css-->
        <center>  <input id="shiny" type="submit" name="submit" value="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="resetbutton" type="reset"></center>
        </td>
          
          </center>
        
      </table>
	 
	</form>
   </div>
</center>


<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->


</body></html>


<?php
	 if(isset($_POST['submit'])){
	 include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
 
	 $name=$_POST['name'];
	 $regno=$_POST['regno'];
	$pass=$_POST['pass'];
	 $email=$_POST['email'];
	 $date=$_POST['date'];
	 $contact=$_POST['contact'];
	 
//	 id	name	reg_no	pass_word	email_adress	date	contact

 
$query =  "INSERT INTO students "."(id, name, reg_no, pass_word, email_adress, date, contact)"."VALUES ('','$name','$regno','$pass','$email','$date','$contact')";
 //'INSERT INTO employee '.'(emp_name,emp_address, emp_salary, join_date) '.'VALUES ( "guest", "XYZ", 2000, NOW() )';
$db->exec($query);	 
echo "<script>window.open('adminaddusers.php?Add=A User has been successfuly Added.......!','_self')</script>";
}
?>


<?php } ?>