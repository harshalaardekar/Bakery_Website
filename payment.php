
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
#ab1:hover{cursor:pointer;}
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
</style>
</head>
<body style="background:url('images/paywall.jpg') no-repeat; background-size:cover;">

<div class="container" style="width:450px;margin-top: 80px">
<div class="card" style="background-color: #9999ff;">
<div class="card-body">
  <center>
  <form class="form" method="post" action="cakeorderprocess.php">
      <br>
      <div class="message" id="message" style="margin: auto;"></div>
      <div class="form-group has-feedback">
        <label><h3>Select Payment Method : </h3></label><br><br>
        <input type="radio" id="payment" name="payment" value="credit">
        <label for="male">Credit Card</label><br>
        <input type="radio" id="payment" name="payment" value="debit">
        <label for="female">Debit Card</label><br>
        <input type="radio" id="payment" name="payment" value="upi">
        <label for="other">UPI ID</label><br>
        <input type="radio" id="payment" name="payment" value="cod">
        <label for="other">Cash on Delivery</label><br><br>
        
          <button type="submit" name="proceed" id="submit"  class="btn1">Proceed</button><br>
      </div>
      </div>
        <!-- /.col -->
                <!-- /.col -->
      </div>
    </form>
  </center>
 
</div>
</div>
</div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>