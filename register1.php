
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
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
          
          if(document.getElementById("Text5").value=="City:")
             {
             	alert("please enter city name");   
             				return false;
             }
             
           if(document.getElementById("Text6").value=="Contact")
           {
               alert("please enter a valid contact");
               					return false;
            }
            
           if(document.getElementById("Text7").value=="Address:")
           {
           
                alert("please enter your address");
           					return false;
           					
           					}
           	if(document.getElementById("Text8").value=="Email:")
      {
                 alert("Email id can not be blank");
                
                return false;

           					
           var emailPat =/^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/;

              
            var emailid=document.getElementById("Text8").value;
            var matchArray = emailid.match(emailPat);
            if (matchArray == null)
            {
                 alert("your email address seems incorrect. please try again");
                 return false
	  
             
             }
             
              if (document.getElementById("Text9").value=="User_name:")
      {
                 alert("Username can not be blank");
                                  return false;

             
       }
       
       
       if (document.getElementById("Text10").value=="Password:")
      {
                 alert("Password can not be blank");
                                  return false;

       }          
                                    
                            return true;           
                       
</script>

</head>

<body>

<?php
$a=$_REQUEST['Text3'];
$b=$_REQUEST['Text4'];
$c=$_REQUEST['Text5'];
$d=$_REQUEST['Text6'];
$e=$_REQUEST['Text7'];
$f=$_REQUEST['DropDownList4'];
$g=$_REQUEST['Text8'];
$h=$_REQUEST['Text9'];
$i=$_REQUEST['Text10'];

$servername="localhost";
$dbname="blood";
$username="karan2";
$password="123456";
$con= mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT* FROM register where email='$g'";
$result=mysqli_query($con, $query);
$j=0;
while($row = mysqli_fetch_assoc($result)) {
$j=1;
}

if ($j==0)
{

$query= "INSERT INTO register(fname, lname, city, contact, address, blood_group, email, uname, password) VALUES ('$a','$b','$c','$d','$e', '$f', '$g', '$h', '$i')";
if(mysqli_query($con, $query))  {
header( "Location:register.php");
}
else
{
echo "Email Already Registered";
}
}



?>

</body>

</html>
