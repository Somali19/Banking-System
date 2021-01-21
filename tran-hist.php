<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Banking</title>
    <style>
    button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
a {
    text-decoration: none;
}
</style>
</head>
<body>
<div class="s-msg" >
<h3 style="text-align:center; margin-top:50px;"> Transaction Successful </h3>

<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" style="width:80px; height:100px; margin-left:auto; margin-right:auto; display: block;">
<a href="home.php"><button  style="width:auto; margin-top:50px; margin-left:auto; margin-right:auto; display: flex;
  justify-content: center;
  align-items: center;">Back</button> </a>

</div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","banks");
//Check connection
if(mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$usname=$_POST['ssname'];
$urname=$_POST['rsname'];
$uamt=$_POST['amt'];

$sql="INSERT INTO transactions(ssname,rsname,amt) VALUES ('$usname','$urname','$uamt')";


if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));

}

mysqli_close($con);
?>
