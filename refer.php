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
	text-align: center;
	font-size: xx-large;
	font-family: "Hobo Std";
	color: #FFFFFF;
	background-color: #FF0000;
}
.style17 {
	font-size: large;
	text-align: center;
}
.style18 {
	font-weight: bold;
}
</style>
<script language="javascript" type="text/javascript">
function validate()
{
 if (document.getElementById("Text1").value=="")
    {
       alert("please enter your Email");
     }
       
          return:false;

}

</script>

</head>

<body>

<form method="post" action="login.php">
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
				DONATE BLOOD AND SAVE LIVES	<br />
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
		Refer A Friend<table  method="post" action="#" onclick="javascript:return validate();" style="width: 100%">
			<tr>
				<td class="style17" style="width: 50%">&nbsp; Your Email Id : <input type="text"  id="Text1"name="Text1" style="width: 169px; height: 24px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				Name&nbsp;:&nbsp;&nbsp; <input type="text" id="Text2" name="Text2" style="width: 169px; height: 24px"> &nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone no :
				<input type="text" id="Text3" name="Text3" style="width: 169px; height: 24px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refrel email:
				<input type="text"  id="Text4" name="Text4" style="width: 169px; height: 24px">&nbsp;<br />
				<br />
				<strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit name="submit" value="SUBMIT" class="style18" style="width: 96px; height: 39px;"></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
				<br />
				</td>
			</tr>
		</table>
		</td>
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
<?php
				if (isset($_REQUEST['err'])==true)
{
echo "<script language='javascript' type='text/javascript'>alert('Invalid username/password, Please Try Again'); </script>";
//echo "Error";
}
else
{
//echo "kkkk";
}

				
				?>
</body>

</html>

