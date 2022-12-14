<?php
$Email =$_POST['Email'];
$Password =$_POST['Password'];


//Database connection
$con =new mysqli('localhost','root','','test');
if ($con->connect_error){
    die('Connection failed : '.$con->connect_error); 
}else{
    $stmt = $con->prepare("select * from users where Email = ?");
    $stmt->bind_param("s",$Email);
    $stmt->execute();
    $stmt_result =$stmt->get_result();
    if($stmt_result->num_rows >0){
       $data = $stmt_result->fetch_assoc();
       if($data['Password']===$Password){

        echo "<script>window.location.assign('Gallery.html');</script>";
       }
    else{
        echo "<h2>Invalid Email or Password</h2>";
    }

}
    
}

?> 