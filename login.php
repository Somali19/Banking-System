<html>
<body>
<?php
$eid=$_GET['lemail'];
$pwd=$_GET['lpwd'];
$con=mysqli_connect("localhost","root","","log");
//check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL:".
mysqli_connect_error();
}
$res=mysqli_query($con,"select email,pwd, from admin where email='$lemail' and pwd='$lpwd' ");
if($row==mysqli_fetch_array($res))
{

session_start();
$_SESSION['lemail']=$lemail;
$_SESSION['lpsw']=$lpwd;
header('Location:http://localhost/Banking/home.php');
}
else
echo "invalid id/pwd";
?>
</body>
</html>