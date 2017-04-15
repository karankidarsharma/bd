<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 2</title>
</head>

<body>
<table>
<tr><td>

<?php session_start();

$u=$_REQUEST['Text1'];
$p=$_REQUEST['Text2'];
if ($u=="" || $p=="")
{

echo " invalid username/password. <a href=admin.php> please try Again</a>"; 
}
else
{
$servername="localhost";
$dbname="blood";
$username="karan3";
$password="123456";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con)

   {
   die('could not connect: ' .mysqli_error());
   }
   
   $query="SELECT * FROM admin where uname='" .$u . "'";
   
   $result=mysqli_query($con, $query);
   while($row= mysqli_fetch_assoc($result))
   
   {
   $dbp=$row["pass"];
   }
   
   if ($dbp==$pass)
   {
   header( "Location:create.php" );
 }
 else
{
echo "Invalid Username/Password. <a href=login1.php>please try again</a>";
}


}

?>


</td></tr>

</table>
</body>

</html>






