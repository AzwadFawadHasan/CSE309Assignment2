<?php
    $submitted=false;
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to database failed due to ".mysqli_connect_error());
    }
    else{
        //echo "<h1>Successfully connected to DB<h1>";
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $contactNumber=$_POST['contactNumber'];
        $issue=$_POST['issue'];
        $sql= "INSERT INTO `contactus`.`contactustable` (`name`, `email`, `subject`, `contactNumber`, `issue`)
         VALUES ('$name', '$email', '$subject', '$contactNumber', '$issue');";
        //echo "<h1>Successfully Insertion of SQL to DB<h1><br>";
        //echo $sql;

        if($con->query($sql) == true){//here -> means object operator
            //echo "Data successfully inserted to db";
            $submitted=true;

        }else{
            //echo "Error: $sql <br> $conn->err";
        }
        $con->close();
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
        <h1>GET IN TOUCH</h1>
        <?php
        if($submitted==false){
            echo "<p>Have any Complaints or suggestions? Drop us a message</p>";
        }
        else if($submitted==true){
            echo "<p><b>Thanks For Contacting US</b></p>";
        }

        
        ?>

        <form input="index.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your name here" name="name">
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email here" name="email">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Your subject here" name="subject">
                </div>
                <div class="column">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" placeholder="Your phone number here" name="contactNumber">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Message/Issues</label>
                    <textarea id="issue" placeholder="Describe your Message/issue in detail here" rows="3" name="issue"></textarea>
                </div>
            </div>
            <button>Submit</button>
            <a href="www.google.com">
                <button id="LogIn">LogIn</button>
            </a>
            <?php

echo '<input type="button"  onclick="window.location=\'http://youtube.com/techgeekshan\'" />';

?>
        </form>
    </div>
</body>
</html>