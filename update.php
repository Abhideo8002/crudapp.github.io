<?php

  include'connect.php';
  $id=$_GET['updateid'];
  $sql="Select * from form where id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $mobile=$row['mobile'];
  $email=$row['email'];
  $message=$row['message'];

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="update form set id=$id,name='$name',mobile='$mobile',email='$email',message='$message' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "updated successfully";
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
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="from-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
  </div>
  <div class="from-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>
  <div class="from-group">
    <label>Message</label>
    <input type="text" class="form-control" placeholder="Enter message here" name="message" autocomplete="off" value=<?php echo $message;?>>
  </div>
     <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>