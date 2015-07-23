<?php session_start();
if(!isset($_SESSION['reg_no']))
{
header("Location:signinform.php");
}
else
{
$regno=$_SESSION['reg_no'];
$password=$_SESSION['pass_word'];

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 

$query="select * from students Where reg_no='$regno' AND pass_word='$password'";
$result=$db->query($query);
$result=$result->fetch();

 
 if ($regno==$result['reg_no'] && $password==$result['pass_word'])
	
	{
	?>
	
<html>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/styletable.css" />
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
    <head>        <title>Student Profile information</title>
	    </head>

    <body><!-- this is header menu bar start included here-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
	  <a class="back" href="studentwelcomepage.php"><font color=" white">Back</font></a>
	 
	 <center>  <h2>         <b><font color="grey"> Student Profile information</font> </h2></center>
	 
	 
	 <center>
	 
	  <table bgcolor="#cf965d" border="1" >
<tr>
    <td><FONT COLOR=BLACK  SIZE=3><b>Name:</b></font></td>
    
	<td><FONT COLOR=BLACK  SIZE=3><?php echo $result['name'];?></font></td>
  </tr>  

	  
	  <tr>
    <td><FONT COLOR=BLACK   SIZE=3><b>Registration No: </b></font></td>
    
	<td><FONT COLOR=BLACK   SIZE=3><?php echo $result['reg_no']; ?></font></td>
  </tr> 
  
<tr>
    <td><FONT COLOR=BLACK   SIZE=3><b>Password:</b></font> </td>
    
	<td><FONT COLOR=BLACK   SIZE=3><?php echo $result['pass_word']; ?></font></td>
  </tr>


<tr>
    <td><FONT COLOR=BLACK   SIZE=3><b>Email adress : </b></font></td>
    
	<td><FONT COLOR=BLACK   SIZE=3><?php echo $result['email_adress']; ?></font></td>
  </tr>  

<tr>
    <td><FONT COLOR=BLACK   SIZE=3><b>Contact: </b></font></td>
    
	<td><FONT COLOR=BLACK   SIZE=3><?php echo $result['contact']; ?></font></td>
  </tr>    
 
   </table>
  
  
  </center>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->
     </body>
	 </html>
	<?php } } ?>