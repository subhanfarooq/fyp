<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styletablereply.css" />
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/slider.css" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- this syle sheet is for table styling-->
<link rel="stylesheet" type="text/css" href="css/styletable.css">	

<!-- this section start for the see more option-->
<link rel="stylesheet" type="text/css" href="css/seemore.css">

<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">

<!-- this is for the seemore option to view the full and less complaint this is jquery library-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"  src="css/jquery-1.11.1.min.js"></script>
</head>
<!-- this script for the see more option with javascript code made by user its not library-->
<SCRIPT src="css/seemorejavascript.js"></SCRIPT>
<script type="text/javascript" src="jquery-1.11.1.min (1).js"></script>
<script type="text/javascript">

	$(document).ready(function() {
							   
		var currentPosition = 0;
		var slideWidth = 1000;
		var slides = $('.slide');
		var numberOfSlides = slides.length;
		var slideShowInterval;
		var speed = 3000;

		
		slideShowInterval = setInterval(changePosition, speed);
		
		slides.wrapAll('<div id="slidesHolder"></div>')
		
		slides.css({ 'float' : 'left' });
		
		$('#slidesHolder').css('width', slideWidth * numberOfSlides);
		
		
		function changePosition() {
			if(currentPosition == numberOfSlides - 1) {
				currentPosition = 0;
			} else {
				currentPosition++;
			}
			moveSlide();
		}
		
		
		function moveSlide() {
				$('#slidesHolder')
				  .animate({'marginLeft' : slideWidth*(-currentPosition)});
		}

	});
</script>
<script>
        tinymce.init({selector:'textarea'});
</script>


</head>


<?php include('adminheader.php');?>

<!--inlude the header section where banners dropdown menu is placed  -->
<?php include('header.php'); ?>
   
</center><center>
<div style="text-align: left">
<a class="back" href="index.php"><font color=" white">Back</a>
</div>

<h1><font color="black">Welcome to head of department page</font></h1>




<body>	


 <br><br>



  <table width="100%" height="100%"  border="1" class="container">
  <tr valign="top">
<!--this is starting left section -->
    <td width="5%">
	
	 <div class="rollover" > <a href="#"></a> </div>
<a href="studentmails.php" ><img src="images/studentsmail1.jpg" onMouseOver="this.src='images/studentsmail2.jpg'" onMouseOut="this.src='images/studentsmail1.jpg'"  /></a>
<hr> 
<div class="rollovergraduate" > <a href="#"></a> </div>
<a href="forwardmail.php" ><img src="images/forwardmail1.jpg" onMouseOver="this.src='images/forwardmail2.jpg'" onMouseOut="this.src='images/forwardmail1.jpg'"  /></a>
    </td>

<td width="80%" valign="top">
<center>
<div id="slideshow">
    <div id="slideshowWindow">
    
        <div class="slide">
            <img src="images/com11.jpg" />
        </div><!--/slide-->
        
     
        
        <div class="slide">
            <img src="images/com33.jpg" />
        </div><!--/slide-->
		
		        <div class="slide">
            <img src="images/com44.jpg" />
        </div><!--/slide-->

		        <div class="slide">
            <img src="images/com55.png" />
        </div><!--/slide-->
        
    </div><!--/slideshowWindow-->
</div><!--/slideshow-->
</center>
</table>
<!--this is ending of table section -->




<br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html></h1>

</center>
<br><br><br><br><br>
<center>

 
<?php include('footersection.php');?>
<br></center>

</body>
</html> 

	 