<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" >
    <title>Banking</title>
    <style>
        body {
            background-image: url("https://cdn.pixabay.com/photo/2018/02/27/06/30/skyscraper-3184798_960_720.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            width:100%;
            height:100%;
            overflow-x:hidden;
        }
        
   .bounce {
    height: 50px;
    overflow: hidden;
    left:0;
    position: relative;
    overflow-x:hidden;
    
}

.bounce p {
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 0;
    overflow:hidden;
    font-size: 25px;
    text-align: center;
    -moz-transform: translateX(50%);
    -webkit-transform: translateX(50%);
    transform: translateX(50%);
    -moz-animation: bouncing-text 5s linear infinite alternate;
    -webkit-animation: bouncing-text 5s linear infinite alternate;
    animation: bouncing-text 10s linear infinite alternate;
}

@-moz-keyframes bouncing-text {
    0% {
        -moz-transform: translateX(50%);
    }
    100% {
        -moz-transform: translateX(-50%);
    }
}

@-webkit-keyframes bouncing-text {
    0% {
        -webkit-transform: translateX(50%);
    }
    100% {
        -webkit-transform: translateX(-50%);
    }
}

@keyframes bouncing-text {
    0% {
        -moz-transform: translateX(50%);
        -webkit-transform: translateX(50%);
        transform: translateX(50%);
    }
    100% {
        -moz-transform: translateX(-50%);
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }
}
.row{
  text-align:center;
  /*the same margin which is every button have, it is for small screen, and if you have many buttons.*/
  background-color: #ffffffa6;
  margin-top:60px;
  height:150px;
  margin-left: 100px;
  margin-right:100px;
  
  
}
.column {
    display:inline-block;
    text-align:center;
    margin-top:30px;
}

input[type=text], input[type=password] {
  width: 100%;
  height:35px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}



/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
#id02 > input[type=text], input[type=password] {
  width: 100%;
  height:35px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.cancelbtn2 {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content1 {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}



/* Add Zoom Animation */
.animate1 {
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
  span.psw1 {
     display: block;
     float: none;
  }
  .cancelbtn2 {
     width: 100%;
  }
}
        </style>
  </head>
  <body >

  
<div class="bounce" style="text-align: center; background-color: rgba(8, 8, 8,0.6); height: 42px; color: white;">
  <p>  Welcome To Internet Banking</p>
</div>
<div style="text-align:center; color:white; margin-top:40px;">
<i class="fas fa-user-tie" style="text-align:center; font-size: 80px; margin-left:auto; margin-right:auto;"></i>
</div>

<div class="row">
  <div class="column" >
 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal1">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content1 animate1" action="login.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><i class="far fa-envelope"></i></label>
      <input type="text" placeholder="Enter Email" name="semail" required style="width:50%; margin-left:auto; margin-right:auto;">
<br>
      <label for="psw"><i class="fas fa-lock"></i></label>
      <input type="password" placeholder="Enter Password" name="spsw" required style="width:50%; margin-left:auto; margin-right:auto;">
      <br>
      <label for="psw-repeat"><i class="fas fa-lock"></i></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required style="width:50%; margin-left:auto; margin-right:auto;">
      <br>
      <label>
     
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Cancel</button>
        <button type="submit" class="signupbtn" >Sign Up</button>
      </div>
    </div>
  </form>
</div>


</div>
<div class="column" >
 
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

<div id="id02" class="modal1">
<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
 
  <form class="modal-content1 animate1" action="login.php" method="post">
   

    <div class="container">
    <h1>Log In</h1>
      <label for="uname" style= "width:auto;"><i class="far fa-envelope"></i></label>
      <input type="text" placeholder="Enter Email" name="lemail" required style="width:50%; margin-left:auto; margin-right:auto;">
<br>
      <label for="psw"><i class="fas fa-lock"></i></label>
      <input type="password" placeholder="Enter Password" name="lpsw" required style="width:50%; margin-left:auto; margin-right:auto;">
     <br>   
      <button type="submit" style="width:20%; margin-left:auto; margin-right:auto;" >Login</button>
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
      <span class="psw1">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>




</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

   </body>
</html>