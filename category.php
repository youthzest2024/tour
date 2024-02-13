<h3>
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
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!--js--> 
<script src="js/jquery.min.js"></script>
<!--/js-->
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<br>
<br>
<br>
<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">
<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:30px; color:#09F"><b>Category</b></td></tr>
<?php
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
while($data=mysqli_fetch_array($result))
{
    echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
}
mysqli_close($cn);
?>
</table>
</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to Trip Planner</td></tr>
<tr><td class="paraText" width="900px">
"In the realm of trip planning, there exists a multifaceted landscape of considerations to ensure a smooth and memorable journey. At the heart of this endeavor lies the destination, a focal point around which all other elements orbit. Timing is paramount, as selecting the right dates can influence everything from airfare prices to weather conditions. Budgetary constraints guide decisions on accommodations, transportation, and activities, shaping the overall experience. From cozy bed-and-breakfasts to luxurious resorts, the choice of where to stay reflects personal preferences and financial resources. Similarly, transportation options range from economical public transit to the convenience of rental cars, each impacting mobility and convenience. Activities form the fabric of the trip, offering opportunities for exploration, relaxation, and cultural immersion. Concurrently, travelers must navigate the intricate web of travel documents, ensuring passports, visas, and permits are in order. Health and safety considerations demand attention, prompting research into vaccinations, travel advisories, and emergency medical care. Packing becomes an art form, as travelers curate essentials based on climate, activities, and personal needs. Amidst these preparations, the prudent traveler secures insurance coverage, safeguarding against unforeseen disruptions. Lastly, compiling a list of emergency contacts provides reassurance and preparedness in case of unexpected situations. Through meticulous attention to these categories, a well-crafted trip plan emerges, promising a journey filled with discovery, adventure, and cherished memories."
</td></tr>
<tr>
    <td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="800px" height="150px" >&lt; &nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
</div>
</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
</h3>