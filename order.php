<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
/*navbar*/
.topnav {
  overflow: hidden;
  background-color: #330000;
}

.topnav a {
  float: right;
  display: block;
  text-align: center;
  padding: 22px 20px;
  text-decoration: none;
  color: white;
  font-size:20px;
}

.topnav a:hover {
  background-color: #f2f2f2;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
/*body*/
.btn 
{
  background-color: white;
  border-color: white;
  border-radius: 20px;
  width:110px;
  height: 30px;
  font-size: 18px;
  color:black;
}
.row
{
max-width:100%;
}
.productbox
{
  max-width:100%;
  height:450px;
  background-color: transparent;
  margin-left: 40px;
}
.box
{
  width:30%;
  height:400px;
  background-color: #660000;
  border-radius: 30px;
  align-items: center;
}
.container {
  position: center;
  text-align: center;
  color: white;
}
.center-right {
  position: absolute;
  top:35%;
  left: 60%;
  color:white;
font-size:60px;
font-family: "Century Gothic"
}
.btn1
{
  background-color: white;
  border-color: white;
  border-radius: 20px;
  width:130px;
  height: 40px;
  font-size: 20px;
  color:black;
}
/*footer*/

 .footer{
    background: #330000;  
    height: 40px;
    width: 100%;
    left: 0;
    bottom: 0;
   color: white;
   text-align: center;
}
.foot{
  font-size: 16px;
    color: white;
    text-align:center;
    margin-top: 5px;
     padding: 15px;
}
.fa {
  padding: 15px;
  font-size: 20px;
  width: 10px;
  height: 10px;
  text-align: left;
  text-decoration: none;
}
  
  .fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.a:hover{
  height: 40px;
  width: 100px;
  opacity: 0.9;
}

.a{
height: 40px;
  width: 100px;

}

/*Form*/
input[type=text],select,textarea,label
{
  border-radius: 10px;
  height:27px;
  width: 150px;
  font-size: 18px;
  margin-left: 0.5%;
}

legend
{
  font-size: 25px;

}

</style>
<body bgcolor="#ffe6e6">

<div class="topnav" id="myTopnav">
  <img src ="images/logo.jpg" style="width:200px;height:70px;margin-left: 100px;">
  <a><form action="veg.html" >
      <button class="btn"> Order Now</button> 
      </form></a>
  <a href=" "> Contact </a>
  <a href=" "> My Orders  </a>
  <a href=" "> Wishlist  </a> 
  <a href=" "> Our Menu </a>
  <a href=" "> About Us </a>
  
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>


<div class="container">
  <img src="images/index.jpg" alt="Snow" height="410px">
  <div class="center-right"><b>Ready to shop 
    <br>Bakery products</b></div>
 </div>
<div class="row">
  <br>
  <center><marquee><h1> Please Enter The Following Details To Complete Your Order </h1></marquee></center>
  <br>
   <div style="width:90%; background-color:white; border-style:inset; border-width:1px; border-radius: 10px; margin-left: 5%;">
    <center>
    <form action="connect.php" style="width:90%;">
      <br>
      <fieldset><br>
      <legend>Personal Details</legend>
        <label>First Name:</label>
        <input type="text"  name="fn" placeholder="FirstName*" required>
        <label>Last Name:</label>
        <input type="text"  name="ln" placeholder="LastName*"required>
        <label>Email:</label>
        <input type="text"  name="email" placeholder="Email*" required>
        <label>Mobile No.:</label>
        <input type="text"  name="mobile" placeholder="Mobile NO*" required>  
      <br>  
    </fieldset><br><br>

    <fieldset>  <br>
      <legend>Delivery Location</legend>
        <label>At: <select value="at" name="at"> 
          <option value="Home"> Home</option>
          <option value="Office"> Office</option>
          </select>
        </label>
        <label>Flat/House No:</label>
        <input type="text"  name="house" placeholder="Flat/House No" required>
        <label>Street/Society Name:</label>
        <input type="text"  name="street" placeholder="Street/Society Name" required>
        <label>City:</label>
        <input type="text"  name="city" placeholder="City" required>
        </legend>
  </fieldset><br>

     <fieldset><br>
      <legend></legend>
        <label><font size="5px">First Name:</font></label>
        <input type="text"  name="fn" placeholder="FirstName*" required>&nbsp;&nbsp;&nbsp;
        <label><font size="5px">Last Name:</font></label>
        <input type="text"  name="ln" placeholder="LastName*"required>&nbsp;&nbsp;&nbsp;
        <label><font size="5px">Email:</font></label>
        <input type="text"  name="email" placeholder="Email*" required>&nbsp;&nbsp;&nbsp;
        <label><font size="5px">Mobile NO:</font></label>
        <input type="text"  name="mobile" placeholder="Mobile NO*" required>&nbsp;&nbsp;&nbsp;   
      <br>  
    </fieldset><br>
  </center>
  </form>
   </div>
  
</div> 
<br>
<div class="footer">
  <a style="float: left; margin-left: 200px;"class="fa fa-facebook"></a>
  <a style="float: left;  margin-left: 20px;"class="fa fa-twitter"></a>
<a style="float: left; margin-left: 20px; "class="fa fa-google"></a>
  <font class="foot">All rights reserved. Copyright ©2020 Bakery CakeWorks Ltd. Disclaimer | T&C | Privacy Policy</font>
  </div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
