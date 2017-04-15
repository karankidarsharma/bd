<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>name&nbsp;&nbsp; age</title>
</head>
<script language="javascript" type="text/javascript">
function validate()
{
        if (document.getElementById("Text3").value=="First_Name:")
        {
               alert("first name field cannot be left blank");
               						return false;
               						
               }
        
        if(document.getElementById("Text4").value=="Last_Name:")
         {
             alert("last name field cannot be left blank");
          						return false;
          }
   return true;
   
   </script>
<body>

<form method="post" action="register1.php" onsubmit="javascript:return validate();" >
	  

 <input name="Text3" type="text">&nbsp;name<br />
	<br />
	<input name="Text4" type="text">&nbsp;age<br />
	<br />
	<input name="Submit1" type="submit" value="submit" /><br />
</form>

</body>

</html>
