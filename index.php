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
.style8 {
	text-align: center;
	font-family: "Hobo Std";
	font-size: x-large;
	color: #FFFFFF;
}
.style9 {
	text-align: center;
}
.style10 {
	font-family: "Hobo Std";
	color: #FFFFFF;
}
.style11 {
	border: 1px solid #000000;
	background-color: #FF0000;
}
.style12 {
	text-align: center;
	font-family: "Hobo Std";
	color: #FFFFFF;
}
.style13 {
	text-align: center;
	color: #FF0000;
	font-family: "Rosewood Std Regular";
	font-size: xx-large;
}
.style14 {
	border-width: 0px;
}
</style>
<script language="javascript" type="text/javascript">

function validate()
{

     if (document.getElementById("Text1").value=="")
     {
           alert("username cannot be blank");
           return false;
           
       }
      if(documents.getElementById("Text2").value=="") 
      {
      
             alert("password can not be left blank");
                                    return false;  
                                  
	}    
	return true;          
}

</script>

</head>

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
				DONATE BLOOD AND SAVE LIVES<br />
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
		<td>
		<table style="width: 100%">
			<tr>
				<td class="style11" style="width: 49%">
				<form action="find.php" method="post">
				<table style="width: 100%">
					<tr>
						<td class="style8">Find A Doner Here!</td>
					</tr>
					<tr>
						<td class="style9"><span class="style10">Select State<br />
						</span><form method="post">
							<select name="Select1" style="width: 141px; height: 20px">
							<option></option>
							<option value="mumbai">mumbai</option>
							<option value="jammu">jammu</option>
							<option value="gujrat">gujrat</option>
							<option value="chennai">chennai</option>
							<option value="delhi">delhi</option>
							</select></form></td>
					</tr>
					<tr>
						<td class="style12">Select Blood Group</td>
					</tr>
					<tr>
						<td class="style9">
						<form method="post">
							<select name="Select2" style="width: 141px; height: 20px">
							<option></option>
							<option value="a">a</option>
							<option value="a+ve">a+ve</option>
							<option value="a-ve">a-ve</option>
							<option value="b">b</option>
							<option value="b+ve">b+ve</option>
							<option value="b-ve">b-ve</option>
							<option value="ab">ab</option>
							<option value="ab+ve">ab+ve</option>
							<option value="o">o</option>
							<option value="o+ve">o+ve</option>
							<option value="o-ve">o-ve</option>
							<option value="ab-ve">ab-ve</option>
							</select></form>&nbsp;</td>
					</tr>
					<tr>
						<td class="style9">
						<form method="post">
							<input name="Submit1" style="width: 96px" type="submit" value="submit" /></form>&nbsp;</td>
					</tr>
				</table>
				</form>
				</td>
				<td valign="top" class="style13">NOTICE<br />
				<div id="st1" class="sec sec-first" style="clear: both; color: rgb(0, 0, 0); font-family: 'Times New Roman', stixgeneral, serif; font-size: 15.9991px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.9988px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
					<h3 style="font-size: 0.875em; line-height: 1.2857; margin: 1.2856em 0px 0.6428em; color: rgb(114, 65, 40); font-family: arial, helvetica, clean, sans-serif;">
					Aims:</h3>
					<p id="__p1" class="p p-first-last" style="margin: 0.6923em 0px;">
					<marquee direction="up"  scrolldelay="200">To evaluate the response rate of transfusion-transmissible 
					infection (TTI)-reactive donors after notification of their 
					abnormal test results for the year 2012.
				
					This study is an observational descriptive study performed 
					in our department over a period of 1 year. We evaluated the 
					response rate of TTI-reactive donors after notification of 
					their abnormal test results over 1 year as per the existing 
					strategy (three telephonic and two postal communications).</marquee></p>
				</div>
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

</body>

</html>

