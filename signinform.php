<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet"	href="css/mystyle.css" />


	
</head>
<body>	



<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->

<br>
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
         <?php echo $_GET[wrong]; ?> 
        
<br><br><br><br><br><br><br><br><br>


<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->

<br>

</body>
</html>