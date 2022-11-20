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
    <div class="outerContainer">
    <div class="table-container">
        <h1 class = "heading">DataBase View</h1>
        <p class = "heading">Showing data from contactUsTable</p>
        <table class="table">
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
                        echo "<tr><td data-label='id'>" .$row["id"]. "</td><td data-label='name'> " . $row["name"]."</td><td data-label='email'> ". $row["email"]."</td><td data-label='subject'> ". $row["subject"]."</td><td data-label='Contact Number'> ". $row["contactNumber"]."</td><td data-label='Message/Issues'> ".$row["issue"]."</td><tr> ";
                    }
                    
                }else{
                    echo "no result";
                }
                $con->close();
            ?>
            </tbody>
        </table>

    </div>

    </div>
    
</body>
</html>