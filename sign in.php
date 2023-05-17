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
                            <label for="username">Enter User Name:</label><br>
                            <input type="text" id="username" name="username" placeholder="Enter name"><br>
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

                        <!-- <script type="text/javascript"> -->
                        <!-- function test() {
                            console.log("login begin");
                            var narr = ["basma", "basant", "aya"];
                            var parr = ["123", "456", "789"];
                            var name = document.forms["myform"]["name"].value;
                            var pass = document.forms["myform"]["pass"].value;
                            for (var i = 0; i < 3; i++) {
                                if ((name == narr[i]) && (pass == parr[i]))
                                    return true;
                                else if (name == "" || pass == "") {
                                    alert("name or password empty")
                                    return false;
                                } else {
                                    alert("name or password invalid")
                                    return false;
                                }
                            }
                            return false;
                        } -->
                        <!-- </script> -->
                    </center>
                </h2>
            </address>
        </body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
// // $name = $_POST['name'];
$password = $_POST['password'];
$username = $_POST['username'];


// Prepare the query
$stmt = $conn->prepare("SELECT password FROM users WHERE 'username' =?");

// Bind the parameter
$stmt->bind_param("s", $username);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Extract the hashed password from the result
$row = $result->fetch_assoc();
$hashed_password = $row["password"];
if (password_verify($password, $hashed_password)) {
    echo 'Password is correct';
} else {
    echo 'Password is incorrect';
}
}
?>