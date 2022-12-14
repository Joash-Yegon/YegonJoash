<?php
if(isset($_POST['Submit'])){
$firstName =$_POST['firstName'];
$LastName =$_POST['LastName'];
$Email =$_POST['Email'];
$Number =$_POST['Number'];
$Gender =$_POST['Gender'];
$password =$_POST['password'];


//Database connection
$db =new mysqli('localhost','root','','test');

if ($db->connect_error){
    die('Connection failed : '.$db->connect_error); 
}else{
    global $connect;
    $stmt = $connect->prepare("INSERT INTO `users`(`firstName`, `LastName`, `Email`, `Number`, `Gender`, `password`) 
    VALUES ($firstName,$LastName,$Email,$Number,$Gender,$password)");
    $values = array_values($data);
    $types = str_repeat('s', count($values));
     $stmt->bind_param("sssiss",$firstName,$LastName,$Email,$Number,$Gender,$password);

    if($rnum==0)
       $stmt->close();
    else{
         echo "All fields Are Required";
         die();
     }
    $stmt->execute();
     return $stmt;
     $stmt->close();
             $db->close();
echo "Registration successful"; }
    }
     
            
?> 
     
    <!-- // $sql = ""INSERT INTO `users`( `firstName`, `LastName`, `Email`, `Number`, `Gender`, `password`) 
    //      VALUES ($firstName,$LastName,$Email,$Number,$Gender,$password,NOW()" ;

    //     $run_INSERT = mysqli_query($db,$sql); -->

















































































































<!-- //     if(!empty($firstName) ||!empty($LastName) || !empty($Email) ||!empty($Number) ||!empty($Gender) ||!empty($password) ) {
//    $host = 'localhost';
//    $dbUsername = 'root';
//     $dbpassword ='';
//     $dbname ='registration';

//     $conn =new mysqli($host,$dbUsername,$dbpassword,$dbname);
//     if(mysqli_connect_error()){
//         die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error()); 
//     }else{
//         $SELECT ="SELECT Email From users where Email = ? Limit 1";
//         $INSERT ="INSERT INTO users( firstName, LastName,Email,Number,Gender,password) 
//         values(?,?,?,?,?,?)";

//         //prepare stmt
//         $stmt == $conn->prepare($SELECT);
//         $stmt->$bind_param("s" , $Email);
//         $stmt->execute();
//         $stmt->bind_results($Email);
//         $stmt->store_result();
//         $rnum =$stmt->num_rows;

//         if($rnum==0){
//             $stmt->close();

//             $stmt = $conn->prepare($INSERT);
//             $stmt->bind_param("sssiss",$firstName,$LastName,$Email,$Number,$Gender,$password);
//             $stmt->execute();
//             echo "Registration successful";
//         }else{
//             echo"Email is Already registered";
//         }
//         $stmt->close();
//         $db->close();

//     }


// }else{
//     echo "All fields Are Required";
//     die();
// }


// //   echo "Registration successful";
// // $stmt->close();
// // $db->close();}
-->




                                                          