
<html>
<body>
<?php
$email=$_GET['semail'];
$pwd=$_GET['spwd'];
$pwd=$_GET['pwd-repeat'];

$con=mysqli_connect("localhost","root","","sign");
//check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL:".
mysqli_connect_error();
}
$res=mysqli_query($con,"select email,pwd, from admin where email='$semail' and pwd='$spwd' ");
if($row==mysqli_fetch_array($res))
{

session_start();
$_SESSION['lemail']=$semail;
$_SESSION['lpsw']=$spwd;
header('Location:http://localhost/Banking/home.php');
}
else
echo "invalid id/pwd";
?>
</body>
</html>