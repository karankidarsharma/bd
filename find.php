<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.style1 {
	font-family: "Hobo Std";
	font-size: xx-large;
	color: #FF0000;
}
.style2 {
	border: 1px solid #000000;
	text-align: center;
}
.style3 {
	border: 1px solid #000000;
}
.style5 {
	text-decoration: none;
}
.style6 {
	color: #FF0000;
}
.style7 {
	border: 1px solid #000000;
	text-align: center;
	color: #FF0000;
}
.style14 {
	border-width: 0px;
}
.style15 {
	background-color: #FFFFFF;
	text-align: center;
}
.style16 {
	margin-bottom: 0px;
}
.style18 {
	border: 3px solid #FF0000;
	width:100%;
	color:white
}
.style17  {
	color:white
	
}
.style19 {
	border: 1px solid red;
	text-align: center;
	color: blue;
	width:100%;
}
.style20  {
	color:red;
	
}

</style>
</head>

<body>

<form method="post" action="login.php" >
<table style="width: 76%" align="center">

	<tr>
		<td valign="top" style="width: 481px">
		<img height="153" src="donate/img/gaveblood_title.png" width="456" /></td>
		<td style="width: 47%" valign="top" class="style3"><span class="style6"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="login1.php">
		<img class="style14" height="147" src="donate/img/images%20(4).jpg" width="343" /></a></strong></span></td>
	</tr>
</table>
</form>
<br />

<table style="width: 80%" align="center" class="style16">
	<tr>
		<td class="style3">
		<table style="width: 100%">
			<tr>
				<td style="width: 30%"><img height="200" src="donate/img/sahara_samaj.png" width="200" /></td>
				<td style="width: 70%" valign="top" class="style1">&nbsp;&nbsp;&nbsp; 
				DONATE BLOOD AND SAVE LIVES<br />
&nbsp; <img height="250" src="donate/img/teaser-3.png" width="590" /></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td class="style3">
		<table style="width: 100%" >
			<tr>
				<td class="style7" style="width: 20%"><strong>
				<a href="admin.php" class="style5"><span class="style6">Home</span></a></strong></td>
				<td class="style2" style="width: 20%"><strong>
				<a href="register.php" class="style5"><span class="style6">Register For Free</span></a></strong></td>
				<td class="style2" style="width: 20%"><strong>
				<a href="refer.php" class="style5"><span class="style6">Refer A Friend</span></a></strong></td>
				<td class="style2" style="width: 20%"><strong>
				<a href="edit_user.php" class="style5"><span class="style6">Edit Your Profile</span></a></strong></td>
				<td class="style2" style="width: 20%"><strong>
				<a href="contact.php" class="style5"><span class="style6">Contact us</span></a></strong></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td class="style15">
		<?php
$a=$_REQUEST['Select1'];
$b=$_REQUEST['Select2'];

$servername="localhost";
$dbname="blood";
$username="karan3";
$password="123456";

$con = mysqli_connect($servername, $username, $password, $dbname);
$query="SELECT * FROM register where city='$a' and blood_group='$b'";
$result=mysqli_query($con, $query);
    echo "<table  bgcolor=red class=style18 >";
  	echo "<tr><td class=style17><h1>List Of Available Donars    </h1></td></tr>";
  	$i=0;
 
while($row = mysqli_fetch_assoc($result)) {
//echo "<table border='1'>";
//echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["contact"]. "</td><td>" .$row["blood_group"] ."</td><td>" . $row ["city"] . "</td></tr>";
//echo "</table>";
//echo "<br/>";
$i=$i+1;



$c = $row["fname"];
$d = $row["lname"];
$e = $row["contact"];
$f = $row["blood_group"];
$g = $row ["city"];
$h = $row ["email"];
{
 
 	echo "<table border='1' class=style19>";
 	echo "<tr><td>";
 	echo "<h2 class=style20><u>$i . Available donars in $g</u></h2>";
 	
	echo "<h2 valign=top align=center>First name = $c</h2>";
	
	echo "<h2>Last name = $d</h2>";
	
	echo "<h2>Phone no = $e</h2>";
	
	echo "<h2>Blood Group = $f</h2>";
	
	echo "<h2>Email = $h<h2>";
	echo "</br>";
	echo "</tr></td>";
	echo "</br>";
 
echo "</table>";

}
}
mysqli_close($con);

?>

		&nbsp;&nbsp;&nbsp;&nbsp; <br />

		<br />
		<br />
		</td>
	</tr>
	<tr>
		<td>
		&nbsp;</td>
	</tr>
	</table>

</body>

</html>