<?php
include 'connect.php';
if(isset($_POST['submit']))
{
  $username = $_POST['uname'];
  $password = $_POST['password']; 

  $query="select * from login_details where username ='$username' and password = '$password'";
  $data=mysqli_query($conn, $query);

   if ($data)
   {
        //echo "Login Sucessfull...";
        $object = $data->fetch_object();

        if($object->category == 0)
          {
            echo "<script> alert('Login Successful')</script>";
            header("refresh:0; url=admindashboard.php");
          }
        else if ($object->category == 1) 
          {
          header("refresh:0; url=userdashboard.php");
          }
        else 
          {
           echo "Category unknown";
          }
  }
  else
  {
    echo "Error : ".mysql_error();
  }
}
else
{
  echo "POST is not set!";
}

?>