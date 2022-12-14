<?php
include 'connection.php';
if(isset($_POST['Submit'])){
$firstName =$_POST['firstName'];
$LastName =$_POST['LastName'];
$Email =$_POST['Email'];
$Number =$_POST['Number'];
$Gender =$_POST['Gender'];
$password =$_POST['password'];
//Database connection
 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}

// $sql="insert into users(firstname,LastName,Email,Number,Gender,password)
// values('$firstName','$LastName','$Email','$Number','$Gender','$password')";
// $insert="INSERT INTO `users`(`id`, `firstName`, `LastName`, `Email`, `Number`, `Gender`, `password`)
//  VALUES ('$firstName','$LastName','$Email','$Number','$Gender','$password')";
// $result=mysqli_query($con,$sql);
if($result){
    echo "Registration successful";
}
}





?>