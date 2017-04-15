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
	font-weight: bold;
	background-color:yellow
}
.style15 {
	font-family: "Hobo Std";
	font-size: large;
}
.style16 {
	border: 1px solid #000000;
	text-align: center;
	background-color: #000066;
}
.style17 {
	text-align: left;
}
.style18 {
	border: 1px solid #000000;
	text-align: center;
	background-color: #000066;
	font-family: "Hobo Std";
	font-size: xx-large;
	color: #FF0000;
}
.style19 {
	color: #FFFF00;
}
.style20 {
	color: #FF0000;
	font-size: x-large;
}
.style21 {
	text-align: center;
}
.style22 {
	color: #FF0000;
	font-size: x-large;
	text-align: center;
}
.style23 {
	border-width: 0px;
}
</style>
<script language="javascript" type="text/javascript">
function validate()
{
        if (document.getElementById("Text3").value=="First_Name:")
        {
               alert("first name field cannot be left blank");
               						return false;
               						
        }
        
          if (document.getElementById("Text4").value=="Last_Name:")
          {
                      alert("last name field cannot be left blank");
          						return false;
          }
          
          if (document.getElementById("Text5").value=="City:")
             {
             	alert("please enter city name");   
             				return false;
             }
          if (document.getElementById("Text6").value=="Contact:")   
              {
                alert("please enter a valid contact no.");
                
               }
              
          var emailPat = /^[0-9]{7,10}$/;
           var emailid=document.getElementById("Text6").value;
     var matchArray = emailid.match(emailPat);
     if (matchArray == null)
    {
               alert("Your Phone Number seems incorrect. Please try again.");
                     return false;
               
    }
 
          if (document.getElementById("Text7").value=="Address:")
          {
               alert("enter a valid address");
                    return false;
                   
           }
               
            
           if(document.getElementById("Text8").value=="")
      {
                 alert("Email id can not be blank");
                     return false;
                
      }
     var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/;
     var emailid=document.getElementById("Text8").value;
     var matchArray = emailid.match(emailPat);
     if (matchArray == null)
    {
               alert("Your email address seems incorrect. Please try again.");
                                     return false;

    }
               
           if (documents.getElementById("Text9").value=="User_name:")
             {
                 alert("Enter A username");
                 return false;
                 }

                
           if (documents.getElementById("Text10").value=="Password:")
             {
                 alert("Enter A password");
                 return false;
                 }
        

 
      }         
           
</script>
</head>

<body>

<table style="width: 80%" align="center">

	<tr>
		<td valign="top" style="width: 481px">
		<img height="153" src="donate/img/gaveblood_title.png" width="456" /></td>
		<td style="width: 50%" valign="top" class="style3"><span class="style6"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="style15"><a href="login1.php">
		<img class="style23" height="147" src="donate/img/images%20(4).jpg" width="343" /></a></span></strong></span></td>
	</tr>
</table>

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
				<a href="edit_user.php" class="style5"><span class="style6">Edit Your Profile</span></a></strong></td>				<td class="style2" style="width: 20%"><strong>
				<a href="contact.php" class="style5"><span class="style6">Contact us</span></a></strong></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td class="style3">
		<table style="width: 100%; height: 198px;">
			<tr>
				<td class="style18" style="width: 50%; height: 51px;" valign="top">
				</span></td>
			</tr>
			<tr>
				<td class="style16" style="width: 50%" valign="top">
				<form action="register1.php" method="post" onsubmit="javascript:return validate();" >
					<div class="style17">
						<table style="width: 100%" >
							<tr>
								<td style="width: 25%" class="style21">
								<span class="style20">
								<strong>Personal Details</strong></span><br />
								<br />
					&nbsp;<input name="Text3" style="width: 157px; height: 26px" id="Text3" type="text" onfocus="if(this.value=='First_Name:')this.value='';" onblur="if(this.value=='')this.value='First_Name:';" value="First_Name:" />
								<br />
								<br />
					<input name="Text4" style="width:157px; height: 26px" id="Text4" type="text"  onfocus="if(this.value=='Last_Name:')this.value='';" onblur="if(this.value=='')this.value='Last_Name:';" value="Last_Name:" />
								<br />
					
				
					
								<br />
								<input name="Text5" type="text" id="Text5" style="width:157px; height: 26px" onfocus="if(this.value=='City:')this.value='';" onblur="if(this.value=='')this.value='City:';" value="City:" /><br />
								<br />
								<input type="text" name="Text6" id="Text6" style="width:157px; height:26px" onfocus="if(this.value=='Contact:')this.value='';" onblur="if(this.value=='')this.value='Contact:';"  value="Contact:" />  <br />
								<br />
								<input type="text" name="Text7" id="Text7" style="width:157px; height:26px" onfocus="if(this.value=='Address:')this.value='';" onblur="if(this.value=='')this.value='Address:';" value="Address:" /> <br/>							</td>
								<td style="width: 25%" class="style21" valign="top">
								<span class="style20"><strong>Blood Group</strong></span><br />
								<br />
								<br />
								<br />
								<select name="DropDownList4" id="DropDownList4" class="textbox1" style="width: 156px; height: 28px">
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
</td>
								<td style="width: 25%" valign="top" class="style22">
								<strong>Login Details<br />
								<br />
                                <input type="text" name="Text8" id="Text8" style="width:157px; height:26px" onfocus="if(this.value=='Email:')this.value='';" onblur="if(this.value=='')this.value='Email:';" value="Email:" /><br />
								<br />
								<input type="text" name="Text9" id="Text9" style="width:157px; height:26px" onfocus="if(this.value=='User_name:')this.value='';" onblur="if(this.value=='')this.value='User_name:';" value="User_name:"/><br/>
								<br />
								<input type="text" name="Text10" id="Text10" style="width:157px; height:26px" onfocus="if(this.value=='Password:')this.value='';" onblur="if(this.value=='')this.value='Password:';" value="Password:"  /><br/>      
								</strong></td>
								<td style="width: 25%" class="style21">
								<input class="style14" name="Submit1" style="width: 107px; height: 38px" type="submit" value="Register Now" />&nbsp;</td>
							</tr>
						</table>
					</div>
					
					
					
					</form>
				&nbsp;</td>
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

