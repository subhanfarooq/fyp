<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderindexpage.css" />
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
</head>
<body>	

<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->
 <a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a>
<!-- <a href='index.php'><IMG SRC='images/wb_back.gif' height=40px width=70px ALIGN=left></a>--> 
<a class="back" href="adminsection.php">BACK</a>
 </a>
<br>
<h2><?php echo $_GET[Inserted]; ?></h2> 
<h2><?php echo $_GET[Deleted]; ?></h2> 

<table width="100%" border="1" >
  <td valign="top">

<a href="headerinsert.php" ><h2>Header title insert </h2></a>
<a href="adminhomepagehader.php" ><h2>Header title delete </h2></a>
<a href="copyrightsinsert.php" ><h2>Copyrights insert </h2></a>
<a href="copyrightsdelete.php" ><h2>Copyrights delete </h2></a>

  </td>
</table>
<!--this is ending of table section -->


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