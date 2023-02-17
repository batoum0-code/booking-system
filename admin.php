<?php
include 'connect.php';


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

<header>
   
        <a class= "logo" href="#">LOGO</a>
        <navbar>
            <a href="#">home</a>
            <a href="#">services</a>
            <a href="#">projects</a>
        </navbar>
   
</header>

<table>
    <th>id</th>
    <th>name</th>
    <th>Email</th>
    <th>Date</th>

<tbody>
<?php    
$sql = 'SELECT * FROM `sec` ';
$result =mysqli_query($con,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $date = $row['date'];

echo 
'
<tr>
<td>'.$id.'</td>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$date.'</td>
</tr>';

}}
    else{
        echo 'there is no data';
    }

?>
</tbody>
</table>
</body>
</html>

