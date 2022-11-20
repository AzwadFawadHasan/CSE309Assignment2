
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
            <?php
if(isset($_POST['email'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to database failed due to ".mysqli_connect_error());
    }
    else{
        //echo "<h1>Successfully connected to DB<h1>";
        //$name=$_POST['name'];
        $email=$_POST['email'];
        //$subject=$_POST['subject'];
        //$contactNumber=$_POST['contactNumber'];
        $password=$_POST['password'];
        if($email!=""){
            $sql = "SELECT * FROM `contactus`.`adminlogincredentialtable` where email='$email' and password='$password'";
           //echo "<h1>Successfully Insertion of SQL to DB<h1><br>";
           //echo $sql;
        }
       

        $result=$con->query($sql);
        //$count=$result->num_rows
        //;echo $count;
        if($result->num_rows >0){
            header('Location: admin.php');
        }
        
        else{
            echo "Invalid username and password"; header('Location: login.php');
        }


    }

    //if(isset($_POST['email']) && isset($_POST['password'])){
    //    $email = $_POST['email'];
    //    $password = $_POST['password'];
    //    echo $email;
    //    echo $password;
    //    //connecting to server
    //    //
    //    
    //    $server = "localhost";
    //    $username = "root";
    //    $password = "";
    //    $db= "contactus";
    //    //$con = mysqli_connect($server, $username, $password,$db);
    //    //$sql_query = "select count(*) as cntUser from `adminlogincredentialtable` where email='".$email."' and password='".$password."'";
    //    $con = mysqli_connect($server, $username, $password, $db);
    //    $sql = "SELECT * FROM `adminlogincredentialtable` where email='$email' and password='$password'";
    //     
    //    $result=$con->query($sql);
    //    $count=$result->num_rows
    //    ;echo $count;
    //    if($result->num_rows >0){
    //        header('Location: admin.php');
    //    }
    //    //echo $count;
    //    //if($count > 0){
    //    //    
    //    //    header('Location: admin.php');
    //    //}
    //    else{
    //        echo "Invalid username and password";
    //    }
//
//
//
//
//
//
    //    //$sql = "SELECT * FROM adminlogincredentialtable WHERE email='$email' && password='$password';";
    //    //
    //    //$result = mysqli_query($con, $sql);
    //    //while ($row = mysqli_fetch_array($result)) {
    //    //    $emailObtained = $row['email'];
    //    //    $passwordObtained = $row['password'];
    //    //    echo $emailObtained
    //    //    ;echo $passwordObtained;
    //    //}
    //   //
    //    //if($emailObtained==$email && $passwordObtained==$password){
    //    //    
    //    //    header('location:admin.php'); 
    //    //
    //    //}else{
    //    //    header('location:login.php');
    //    //}
    //    //$con->close();
    //   
//
    //}
    //

    }
?>

        </form>
    </div>
</body>
</html>