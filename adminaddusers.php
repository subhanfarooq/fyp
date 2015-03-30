<!-- this is the rendom password generator-->
<?php 
$digit = rand (1,4);
$digit2 = rand (5,9);
$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);

$password=$digit.$s.$z.$q.$digit2.$t;



?>

<!-- this is the rendom password generator end  we called this $password in form field-->

<html>
<head>
<style type="text/css">   
a:link{color:red;
text-decoration:none;
}
a:visited{color:green;
}
a:hover{background-color:blue;
color:white;
text-decoration:underline;
font-weight:bold;
}     
a:active{background-color:orange;
}
</style>

</head>
<body style="background-color:#ece2a7"><br>
 <a href="adminsection.php">BACK</a>
 </a>

<center><h2><hr><b><font color="grey">Add User here by putting information Here</font></b></h2><hr></center>

<br><br><br><br>
<center>
	<form action="adminaddusers.php" method="post">
	  <table bgcolor="#FFE0C0" border="1">
        <tr>
          <td>Name: </td>
          <td><input type="text" name="name" value=""/></td>
        </tr>
        <tr>
          <td>Registration NO: </td>
          <td><input type="text" name="regno"  value=""/></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="text" name="pass"  value="<?php echo $password; ?>"/></td>
        </tr>
        <tr>
          <td>Email Adress: </td>
          <td><input type="text" name="email"  value=""/></td>
        </tr>
        <tr>
          <td>Date Of Registration: </td>
          <td><input type="date" name="date"  value=""/></td>
        </tr>
        <tr>
          <td>Contact: </td>
          <td><input type="text" name="contact"  value=""/></td>
        </tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="submit" value="submit"/>
        </div> <div align="center"></div></td>
          <center>
          </center>
        
      </table>
	</form>
  
</center>
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
echo "Account has been successfully created";
}
?>