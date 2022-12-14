<?php
      $db = mysqli_connect('localhost','root','','registration') or die('Connection failed : '.$conn->connect_error); ;

      if (isset($_POST['registration'])){
       $firstName =$_POST['firstName'];
       $LastName =$_POST['LastName'];
       $Email =$_POST['Email'];
       $Number =$_POST['Number'];
       $Gender =$_POST['Gender'];
       $password =md5($_POST['password']); //password encrypted

        

        $query = "INSERT INTO users( firstName, LastName,Email,Number,Gender,password)
         VALUES ($firstName,$LastName,$Email,$Number,$Gender,$password,NOW()" ;

        $run_INSERT = mysqli_query($db,$query);

        echo "Registration successful";

      }
?> 