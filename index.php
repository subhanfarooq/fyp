<html><head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderindexpage.css" />
<script type="text/javascript" src="jquery-1.11.1.min (1).js"></script>
<script type="text/javascript">

	$(document).ready(function() {
							   
		var currentPosition = 0;
		var slideWidth = 600;
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
</head>
<body>	



<!-- this is header banner for uet peshawar-->
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->

 
	<!-- this is header menu bar start included here-->
<?php include('header.php'); ?>
     <!-- this is header ending -->


<br>
<table width="100%" border="1" class="container">
  <tr valign="top">

<!--this is starting of table section -->
<?php include('tableleftsection.php'); ?>	
<!--this is ending of left section -->
	
	
<!--this is starting of mid section -->
<?php include('tablemidsection.php'); ?>
<!--this is ending of mid section -->
	
	
<!--this is starting right section -->
<?php include('tablerightsection.php'); ?>
<!--this is ending of right aside section -->

  </tr>
</table>
<!--this is ending of table section -->


<br><br><br><br><br><br><br><br><br><br><br><br>



<!--this is the footer start section -->
<?php include('footersection.php'); ?>

<!--this is the footer end section -->




</body>
</html>