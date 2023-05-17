<?php    
    require('./includes/server.php');
    $sql_create_db = "CREATE DATABASE restaurant";
    mysqli_select_db($conn, "restaurant");
    $sql = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
        )";
?>
<html>
<head>
            <link rel="stylesheet" href="css/in.css">
            <meta charset="utf-8">
        </head>
        <body style="background-image: url('photo/image3.png')">
            <address>
                <h2>
                    <center>
                        <form name="myform"  action="" method="POST">
                            <p><i> Welcome Back</i></p>
                            </p>
                            <label for="name">Enter User Name:</label><br>
                            <input type="text" id="name" name="name" placeholder="Enter name"><br>
                            <br>
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" required placeholder="Enter your Passward"><br>
                            <br>
                            <input type="reset" value="Reset" class="clear">
                            <input type="submit" value="login" class="sub">
                            <h5>
                                <a href="sign up.php">To Sign Up</a>
                            </h5>
                        </form>
                    </center>
                </h2>
            </address>
        </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$query = "SELECT * FROM users WHERE name='$name'";
$result = mysqli_query($conn, $query);

//Check if user exists
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    //Compare entered password with stored password
    if(base64_encode($_POST['password']) === $row['password']){
        echo "User authenticated successfully";
        header("location:page1.php");
    } else{
        echo "Invalid password";
    }
} else{
    echo "User does not exist";
}

//Close the Database Connection
mysqli_close($conn);
}
?>
