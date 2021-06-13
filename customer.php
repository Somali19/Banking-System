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
            <a class="nav-link " href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="customer.php">Customers Details</a>
          </li>
          
         
        </ul>
    
    
      
    </div>
  </div>
</nav>
</div>
</section>
<section class="customer" style="margin-top: 100px; margin-bottom: 80px;">
   
<h2 style="text-align:center; color: blue;">LIST OF CUSTOMERS</h2>
<br> <br>
<?php
$con=mysqli_connect("localhost","root","","banks");
// Check connection
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: ";
   mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT id,sname,cemail,sdate FROM customerslist");

echo "<table border='2' align='center' bgcolor='cyan' >
<tr>
<th>Id</th>
<th>Sender Name</th>
<th>Receiver Name</th>
<th>Date & Time</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['sname'] . "</td>";
echo "<td>" . $row['cemail'] . "</td>";
echo "<td>" . $row['sdate'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>


<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color: rgb(102, 179, 255);">
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
