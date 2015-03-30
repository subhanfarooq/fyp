



<!-- included rendom fuction it it for rendom password generation -->
<?php include 'randomfunction.php';?>

<html><head>
<!-- this is for overall full styleup page-->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- this style is only for singup section -->
<link rel="stylesheet"	href="css/signupstyle.css" />

<!-- this is for backbutton-->
<link rel="stylesheet"	href="css/backbutton.css" />
	
</head>


<body>	

<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->
<a class="back" href="index.php">Back</a>
<br>
<center>
<!--this is the starting of the form -->
	<form class="loginform group" action="signupsubmitt.php" method="post">
	
		<h2>Singup</h2>
		<p>Sign up below</p>
		
		<!-- Name field-->
		<label for="myname">Name:</label>
		<input type="text" name="name" value=""  placeholder="Please give username" required /> 
	
	<!-- registration no field-->
	    <label for="regno">Registration NO:</label>
		<input type="text" name="regno" value=""  placeholder="Please give Registration no" required />
		
			<!-- password field-->
		<input type="hidden" name="password" value="<?php echo $password; ?>" /> 
		
		<!-- email field-->
	    <label for="email">Email Adress:</label>
		<input type="email" name="email" value=""  placeholder="Please give valid email Address" required />
		
		<!-- date field-->
	    <label for="date">Date of Registration:</label>
		<input type="date" name="date" value=""   />
		
			<!-- Contact field-->
	    <label for="contact">Contact No:</label>
		<input type="number" name="contact" value="" placeholder="Please give phone or cell no" required  />
	
	
			<!-- submit button-->
		 <button type="submit" name="submit" >Signup</button>
	</form>
	<br>
	 <?php echo $_GET[users]; ?> 
	
        

<br><br><br><br><br><br><br><br><br>


<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->

<br>

</body>
</html>