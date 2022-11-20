<?php

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email;
        echo $password;
        //connecting to server
        //
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $db= "contactus";
        $con = mysqli_connect($server, $username, $password, $db);
        $sql = "SELECT * FROM `adminlogincredentialtable` where email='$email' &&  password='$password';";
        $result=mysqli_query($con, $sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
            header('location:admin.php');
            //echo "<h1> corret </h1>";

        }else{
            
            header('location:login.php');
            
        }
        

    }
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="container">
        <h1>Login</h1>
       

        <p>Enter Your Credentials</p>
        <form input="login.php" method="POST">
            <div class="row">
               
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email here" name="email">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="password">Password</label>
                    <input type="text" id="password" placeholder="Your password here" name="password">
                </div>
              
            </div>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>