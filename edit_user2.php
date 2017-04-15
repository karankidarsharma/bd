<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$a=$_REQUEST['Text1'];
$b=$_REQUEST['Text2'];
$c=$_REQUEST['Text3'];
$d=$_REQUEST['Text4'];
$e=$_REQUEST['Text5'];
$f=$_REQUEST['DropDownList4'];
$g=$_REQUEST['Text6'];
$h=$_REQUEST['Text7'];
$i=$_REQUEST['Text8'];

$servername="localhost";
$dbname="blood";
$username="karan3";
$password="123456";

$con=mysqli_connect($servername, $username, $password, $dbname);

$query= "UPDATE register SET fname='$a', lname='$b', city='$c', contact='$d', address='$e', blood_group='$f' ,email='$g',uname='$h',password='$i' WHERE Email='$g' and password='$i'";       

mysqli_query($con, $query);
mysqli_close($con);
header( "Location:admin.php");

?>
</body>

</html>
