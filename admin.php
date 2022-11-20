<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="adminStyle.css">
</head>



<body>
    <div class="container">
        <h1>DataBase View</h1>
        <p>Showing data from contactUsTable</p>
        <table>
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>subject</th>
            <th>Contact Number</th>
            <th>Message/ Issue</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $db= "contactus";
                $con = mysqli_connect($server, $username, $password, $db);
                $sql = "SELECT * FROM contactustable";
         
                $result=$con->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>" .$row["id"]. "</td><td> " . $row["name"]."</td><td> ". $row["email"]."</td><td> ". $row["subject"]."</td><td> ". $row["contactNumber"]."</td><td> ".$row["issue"]."</td><tr> ";
                    }
                    
                }else{
                    echo "no result";
                }
                $con->close();
            ?>
            </tbody>
        </table>

    </div>
</body>
</html>