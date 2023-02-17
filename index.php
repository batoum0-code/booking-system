<?php
 
 include "connect.php";

 if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    
    $sql = "INSERT INTO `sec`(name,email,date) 
    VALUES ('$name','$email','date')";
    $result = mysqli_query($con,$sql);
    
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <a href="#" class="logo1">LOGO</a>
    <div class="description">
        <p>Welcome to hospital ACHIFAA </p>
    </div>
  
        <form action="index.php" method= "post">

            <input type="text" name = "name" placeholder = "ENTER YOUR NAME">
            <input type="email" name = "email" placeholder= "ENTER YOUR EMAIL">
            <input type="date" name = "date">
            <button name ="submit" class = "btn" >Book now</button>
         
        </form>
    
</div>
</body>
</html>