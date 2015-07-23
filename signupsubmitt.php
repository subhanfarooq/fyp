
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
<?php
if (isset($_POST['submit']))

 {
// database connetction creating
include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();


 $name = $_POST['name'];
 $regno = $_POST['regno'];
 $message = $_POST['password'];
 $email = $_POST['email'];
 $date = date("Y-m-d");
 $contact = $_POST['contact'];

$query1="select * from students where email_adress ='$email'";
//$run=mysql_query($query1);
$result=$db->query($query1);
$result=$result->fetch();

//checking for email adress validation that wether the email adress exist already or not if exist then give alert to him/her otherwise send the mail
If($email == $result['email_adress'])
{
echo"<script>window.open('signup.php?users=give valid or new email address.......!','_self')</script>";
exit();
}

// its the sending mail option to send the mail if the email is did't match in database
elseif( strlen($regno) < 11 )
{
echo "<script>window.open('signup.php?correct=Type Correct Registration No In the field.......!','_self')</script>"; 
}

/*elseif( !preg_match(" #.*^(?=.*[a-z]{5})(?=.*[0-9]{6}).*$#", $regno) ) {

echo"what";                   
}
*/
else{
/* insert into database query */
$query="insert into students value('','$name','$regno','$message','$email','$date','$contact')";
//$run_posts= mysql_query($query);
$db->exec($query);

/* its for mail section */
$to = $email;
$msg = 'Registration No: '."$regno".'       And Password   : '."$message" ;
$subject = 'Here is your Information Data for Sign up' ;
$headers = "From: CMS UET Peshawar <".$email."> \r\n";
$send_email = mail($to,$subject,$msg,$headers);
echo $send_email ? "Message sent! you may go to your Gmail account and check registration no and Password for sign in " : "Error sending message!";

}}
?>

</center>
<br>
	
        

<br><br><br><br><br><br><br><br><br>


<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->

<br>

</body>
</html>