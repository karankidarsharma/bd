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
	border-style: solid;
	border-color: #FF0000;
	background-color: #FF0000;
}
.style16 {
	text-align: center;
	font-family: "Hobo Std";
	color: #FFFFFF;
	font-size: xx-large;
}
.style17 {
	font-weight: bold;
}
</style>
</head>
<?php session_start();

$a=$_REQUEST['Text1'];
$b=$_REQUEST['Text2'];


$servername="localhost";
$dbname="blood";
$username="karan2";
$password="123456";
$con= mysqli_connect($servername, $username, $password, $dbname);
$query="SELECT * FROM register where Email='$a' ";
$result=mysqli_query($con, $query);
$j="";
while($row = mysqli_fetch_assoc($result)) {
$k= $row["sno"];
$l= $row["fname"];
$c= $row["lname"];
$d= $row["city"];
$e= $row["contact"];
$f= $row["address"];
$g= $row["blood_group"];
$h= $row["email"];
$i= $row["uname"];
$j= $row["password"];
}
if ($b==$j)
{
echo "<h1><marquee>Please update your record</marquee></h1>";
}
else
{
header( "Location:edit_user.php?err=Login+error+Please+Try+Again" );
echo "invalid Email/password please try again";
}


?>

<body>

<form method="post" action="login.php" onsubmit="javascript:return validate ();">
<table style="width: 80%" align="center">

	<tr>
	
		<td valign="top" style="width: 481px">
		<img height="153" src="donate/img/gaveblood_title.png" width="456" /></td>
		<td style="width: 50%" valign="top" class="style3"><span class="style6"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="login1.php">
		<img class="style14" height="147" src="donate/img/images%20(4).jpg" width="343" /></a></strong></span></td>
	</tr>
</table>
</form>
<br />

<table style="width: 80%" align="center">
	<tr>
		<td class="style3">
		<table style="width: 100%">
			<tr>
				<td style="width: 30%"><img height="200" src="donate/img/sahara_samaj.png" width="200" /></td>
				<td style="width: 70%" valign="top" class="style1">&nbsp;&nbsp;&nbsp; 
				DONATE BLOOD AND SAVE LIVES 
			<br />
&nbsp; <img height="250" src="donate/img/teaser-3.png" width="590" /></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td class="style3">
		<table style="width: 100%">
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
		
		<h1 class="style16">Edit Your Profile</h1>
		
		<form action="edit_user2.php" method="post" enctype="multipart/form-data">
				
			<div style="width: 1067px">
				&nbsp;<table style="width: 100%">
					<tr>
						<td style="width: 33%">Enter First name:&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="Text1" style="height: 29px; width: 212px" type="text" value="<?php echo $l;?>"  /><br />
						<br />
						Enter Last name:&nbsp;&nbsp; &nbsp;
						<input name="Text2" style="height: 29px; width: 212px" type="text" value="<?php echo $c;?>"  /><br />
						<br />
						Enter City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						&nbsp;
						<input name="Text3" style="height: 29px; width: 212px" type="text" value="<?php echo $d;?>"  /><br />
						<br />
						Enter Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="Text4" style="height: 29px; width: 212px" type="text" value="<?php echo $e;?>"  /><br />
						<br />
						Enter address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="Text5" style="height: 29px; width: 212px" type="text" value="<?php echo $f;?>" /></td>
						<td style="width: 33%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="DropDownList4" id="DropDownList4" class="textbox1" style="width: 156px; height: 28px">
								<option>Choose A Group</option>
	<option value="A+ve">A+ve</option>
	<option value="A-ve">A-ve</option>
	<option value="B+ve">B+ve</option>
	<option value="B-ve">B-ve</option>
	<option value="AB+ve">AB+ve</option>
	<option value="AB-ve">AB-ve</option>
	<option value="O+ve">O+ve</option>
	<option value="O-ve">O-ve</option>
	<option value="A1+ve">A1+ve</option>
	<option value="A1-ve">A1-ve</option>
	<option value="A2+ve">A2+ve</option>
	<option value="A2-ve">A2-ve</option>
	<option value="A1B+ve">A1B+ve</option>
	<option value="A1B-ve">A1B-ve</option>
	<option value="A2B+ve">A2B+ve</option>
	<option value="A2B-ve">A2B-ve</option>

</select>
&nbsp;</td>
						<td style="width: 34%" valign="top">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="Text6" style="height: 29px; width: 212px" type="text" value="<?php echo $h;?>"  /><br />
						<br />
						User name :&nbsp; 						<input name="Text7" style="height: 29px; width: 212px" type="text" value="<?php echo $i;?>" /><br />
						<br />
						Password:&nbsp;&nbsp;&nbsp; 						<input name="Text8" style="height: 29px; width: 212px" type="text" value="<?php echo $j;?>" /> 
 
						&nbsp;&nbsp;<br />
						<br />
						<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" value="Update" class="style17" style="width: 103px; height: 26px"></strong> </td>
					</tr>
				</table>
			</div>
				
			</form>
		&nbsp;</td>
	</tr>
	<tr>
		<td>
		<table style="width: 100%">
			<tr>
				<td style="width: 70%">
				<img height="476" src="donate/img/12-fb_blooddonate.jpg" width="838" /></td>
				<td class="style3" style="width: 30%">
				<img height="225" src="donate/img/images%20(2).jpg" width="225" /></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>

</body>

</html>

