<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <button class="btn btn-danger my-5"><a href="user.php" class="text-light"> Add User</a></button>

    <table class="table table-dark ">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql="select * from `croude`";
    $result= mysqli_query($con,$sql);
    if($result){
       

        while(  $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
        <button class="btn btn-danger "><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-primary "><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
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