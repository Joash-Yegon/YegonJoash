<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div class="input-group">
                <form method="post" action="" enctype="">
                   <label>Username<label>
                   <input type="text" name="username" class="form-control" required>
                   <label>Email<label>
                   <input type="email" name="email" class="form-control" required>
                   <label>Password<label>
                   <input type="password" name="password" class="form-control" required>
                
                   <input type="submit" name="Register" class="form-control" style="background-color:blue;">
                   <a href="Login.php">Login</a>

                </form>
</div>        
    </body>
</html>

<?php
      $db = mysqli_connect('localhost','root','','tutorials') or die();

      if (isset($_POST['Register'])){
        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = md5($_POST['password']); //password encrypted

        $query = "INSERT INTO users( username, email, password)
         VALUES ('$username','$email','$password',NOW()" ;

        $run_INSERT = mysqli_query($db,$query);

        echo "Registration successful";

      }
?> 