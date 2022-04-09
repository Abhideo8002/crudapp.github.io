<?php

  include'connect.php';

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="insert into form (name,mobile,email,message) 
    values('$name','$mobile','$email','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "Data inserted successfully";
      header('location:display.php');
    }

    else
    {
      die(mysqli_error($con));
    }
    
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Abhideo Group</title>
    
  </head>
  <body>
    <div class="container my-5">

      <form method="post">
  <div class="from-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>
  <div class="from-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="from-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  <div class="from-group">
    <label>Message</label>
    <input type="text" class="form-control" placeholder="Enter message here" name="message" autocomplete="off">
  </div>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>