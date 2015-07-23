<html>
<head>
<link rel="stylesheet" type="text/css" href="print.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="styleprintpage.css" />
<!-- this is for backbutton style-->
<link rel="stylesheet" type="text/css" href="css/backbutton.css">
</head>
<script type="text/javascript">
/*--This JavaScript method for Print command--*/
    function PrintDoc() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
</script>
 <img src="images/banner111.jpg" style="width:1337px;height:240px">
 <!-- this is ending header banner for uet peshawar-->
 <br><br>
 
  <!--<a href='logout.php' title="LOG OUT"><IMG SRC='images/logout-xxl.png' height=40px width=40px ALIGN=RIGHT></a> -->
  <a class="back" href="adminsection.php"><font color=" white">Back</font></a>
 <?php
	 if(isset($_POST['submit'])){
	 include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
	
	 $name=$_POST['name'];
//     $pass=$_POST['pass'];
$query = "Select * from students WHERE name='$name'";
$result=$db->query($query);
$result=$result->fetch(); 
	 
}

// if result not found in database then dislpay this else statment or if found then display downward else statement 
if(empty($result))
{
echo"<center><h2 id='h1index'>no result found try another<h2></center> ";

echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
";
//--this is the footer start section -->
 include('footersection.php'); 
}
else{
	 ?>

<center>
<body  id="printarea">
    <table class="tble">
        <tr>
            <td>
                Student Name
            </td>
            <td>
             <b> <?php echo  $result['name'];?>
            </td>
        </tr>
        <tr>
            <td>
                Student Registration No
            </td>
            <td>
             <b>  <?php echo  $result['reg_no'];?>
            </td>
        </tr>
        <tr>
            <td>
                Student Password
            </td>
            <td>
              <b>  <?php echo  $result['pass_word'];?>
            </td>
        </tr>
		<tr>
            <td>
                Student Email Address
            </td>
            <td>
             <b>  <?php echo  $result['email_adress']; ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>
            </td>
            <td>
                <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>
            </td>
        </tr>
    </table>
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--this is the footer start section -->
<?php include('footersection.php'); ?>
</body>
</html>	 
	 
<?php } ?>