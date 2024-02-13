<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->

<body>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>

<?php include('top.php'); ?>
<br>
<br>
<br>
<!--/sticky-->
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">Category</td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Enquiry</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>

<table border="0"; width="600px" height="400px" align="center" >
<?php

$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";

$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 
<form method="post" enctype="multipart/form-data">

<tr><td colspan="3" class="middletext">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr>
    <td class="lefttxt">Name:</td>
    <td><input type="text" name="t1" required pattern="[a-zA-Z\s]{3,50}" class="form-control" title="Please Enter Only Letters and spaces between 3 to 50 characters for Name"/></td>
</tr>
<tr>
    <td class="lefttxt">Gender:</td>
    <td>
        <input type="radio" name="r1" value="Male" id="maleRadio" required>
        <label for="maleRadio">Male</label>
        <input type="radio" name="r1" value="Female" id="femaleRadio">
        <label for="femaleRadio">Female</label>
    </td>
</tr>
<tr>
    <td class="lefttxt">Mobile No.</td>
    <td><input type="tel" name="t2" required pattern="[0-9]{10}" class="form-control" title="Please Enter a 10-digit Phone Number"/></td>
</tr>
<tr>
    <td class="lefttxt">Email:</td>
    <td><input type="email" name="t3" required class="form-control" /></td>
</tr>
<tr>
    <td class="lefttxt">No.of Days:</td>
    <td><input type="number" name="t4" required min="1" max="20" class="form-control" title="Please Enter a number between 1 and 20 for No. of Days"/></td>
</tr>
<tr>
    <td class="lefttxt">No.of Children:</td>
    <td><input type="number" name="t5" required min="1" max="10" class="form-control" title="Please Enter a number between 1 and 10 for No. of Children"/></td>
</tr>
<tr>
    <td class="lefttxt">No.of Adults:</td>
    <td><input type="number" name="t6" required min="1" max="20" class="form-control" title="Please Enter a number between 1 and 20 for No. of Adults"/></td>
</tr>
<tr>
    <td class="lefttxt">Enquiry Message:</td>
    <td><textarea name="t7" required class="form-control" title="Please Enter an Enquiry Message"/></textarea></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Submit" name="sbmt" class="btn btn-primary"/></td>
</tr>


</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>

