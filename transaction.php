<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Banking</title>
    <!--Bootstrap CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    text-align: center;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:50px;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    text-align: center;
    color: white;
    background-color: black;
  }
  
  /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
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


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: auto%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: transparent;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: transparent;
  width: 50%; /* Could be more or less, depending on screen size */
  height:auto;
}
.close {
  position: absolute;
  right: 35px;
  top: 40px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
 </style>
</head>
<body >

<section class="header_menu" id="header_menu">
  <div class="container-fluid px-0 shadow">
<nav class="navbar navbar-expand-lg fixed-top navbar-light " style="background-color: rgba(102, 179, 255,1);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-university" style="font-size: 50px;"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item">
            <a class="nav-link " href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="transaction.php">Transaction History</a>
          </li>
          
         
        </ul>
    
    
      
    </div>
  </div>
</nav>
</div>
</section>

<br>

<section class="customer" style="margin-top: 100px; margin-bottom: 80px;">
   
<h2 style="text-align:center; color: blue;">TRANSACTION HISTORY</h2>
<br> <br>
<?php
$con=mysqli_connect("localhost","root","","banks");
// Check connection
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: ";
   mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM transactions");

echo "<table border='2' align='center' bgcolor='cyan' >
<tr>

<th>Sender Name</th>
<th>Receiver Name</th>
<th>Amount</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['ssname'] . "</td>";
echo "<td>" . $row['rsname'] . "</td>";
echo "<td>" . $row['amt'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>




<button onclick="document.getElementById('id03').style.display='flex'" style="width:auto; display: flex;
  justify-content: center;
  align-items: center; margin-left:auto; margin-right:auto;">SEND MONEY</button>

<div id="id03" class="modal">
<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
 
<form class="modal-content animate" action="tran-hist.php" method="post">



<table align="center" border="1"  width="500" height="650">

<tr>
    <th> Sender Name : </th>
    <th><input type="text" placeholder="sender name" name="ssname" size="30"></th>
  </tr>


  <tr>
    <th>Receiver Name : </th>
    <th><input type="text" placeholder="sender name" name="rsname" size="30"></th>
  </tr>



<tr>
   <th> Amount </th> 
    <th><input type="number" placeholder="Amount" name="amt"></th>

</tr>


<tr>

<th><input type="reset"></th>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
<th><input type="submit" value="Send"> </th>
</tr>
</table>

</form>
</div>


<br> <br>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color: rgb(102, 179, 255); margin-top:20px; bottom:0;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Navbar</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Quick Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">About</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Offers & Discounts</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Get Coupons</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Contact Us</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

    
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Supports</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">FAQ</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Terms & Conditions</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Privacy Policy</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Report</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
  Copyright © 2021
    <a class="text-dark" href="https://mdbootstrap.com/">All rights reserved</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!--Bootstrap CDN-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
 
 

</body>
</html>