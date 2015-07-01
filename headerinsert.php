<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderindexpage.css" />

</head>
<body>	



<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->

<a href="adminsection.php">BACK</a>
 </a>

<center><h2><hr><b><font color="grey">Add home header title</font></b></h2><hr></center>

<br><br><br><br>
<center>
	<form action="headerinsert.php" method="post">
	  <table bgcolor="#FFE0C0" border="1">
        <tr>
          <td>Name for Display </td>
          <td><input type="text" name="name" value=""/></td>
        </tr>
        <tr>
          <td>Link destination </td>
          <td><input type="text" name="regno"  value=""/></td>
        </tr>
	     <td colspan="2"><div align="center">
          <input type="submit" name="submit" value="submit"/>
        </div> <div align="center"></div></td>
          <center>
          </center>
        
      </table>
	</form>
	 
	 
	 
<br><br><br><br><br><br><br><br><br><br><br><br>



<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!-- this is the hit counter in footer-->

<!--this is the footer end section -->


<!--<div align='center'><a href='http://www.hit-counts.com'><img src='http://www.hit-counts.com/counter.php?t=MTM1ODg0MA==' border='0' alt='Web Counter'></a><BR><a href='http://www.hit-counts.com'>Web Counter</a></div>
this is example of hit counter
-->

</body>
</html>


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

 
$query =  "INSERT INTO home_page "."(id, title, title_page)"."VALUES ('','$name','$regno')";
 //'INSERT INTO employee '.'(emp_name,emp_address, emp_salary, join_date) '.'VALUES ( "guest", "XYZ", 2000, NOW() )';
$db->exec($query);	 
echo "<script>window.open('design.php?Inserted=A Title has been inserted you may check.......!','_self')</script>";
}
?>