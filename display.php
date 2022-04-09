<?php
   include 'connect.php';
   
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abhideo Group</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container">
          <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>

         </button>
         <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
     $sql="Select * from form";
     $result=mysqli_query($conn,$sql);
     if ($result){     
     while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $message=$row['message'];
        echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$mobile.'</td>
      <td>'.$email.'</td>
      <td>'.$message.'</td>
      <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</button>
     </td>
    </tr>';
       }
     }

  ?>
     
  </tbody>
</table>
     </div>
</body>
</html>