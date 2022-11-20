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
        $con = mysqli_connect($server, $username, $password);
        $sql = "SELECT * FROM adminlogincredentialtable where email='$email' &&  password='$password';";
        $result=$con->query($sql);
        $num=mysqli_num_rows($result);
        if($num != 0){
            header('location:admin.php');
            //echo "<h1> corret </h1>";

        }else{
            
            header('location:login.php');
            
        }
        

    }
    


?>