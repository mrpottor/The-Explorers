
<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `user_details`.`user_details` (`Name`, `Emails`, `Password`) VALUES ('$name', '$email', '$password',current_timestamp());";
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Enter Your Details To Sign Up</h3>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="password" name="password" id="password" placeholder="Enter Your password">
            <button class="btn">SIGN UP</button>
            <button class="btn1">LOGIN</button>
        </form>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `user_details` (`Name`, `Emails`, `Password`) VALUES 
        ('Manohar', 'hellomanoharkr@gmail.com', '12345');-->
</body>
</html>