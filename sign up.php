<?php require('./includes/server.php');?>

<html>
<head>
    <link rel="stylesheet" href="css/new.css">
    <meta charset="utf-8">
</head>

<body style="background-image: url('photo/new2.jpeg');">
    <center>
        <h1>Sign up to enjoy with us <img src="photo/8.jfif" style="height: 50px;">
        </h1>
    </center>
    <form name="myform" class="form"  style="font-size:25px;" action="" method="POST">
        <h2>
            <label for="name">Username:</label><br>
            <input type="text" name="name" required/><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email"placeholder="username@gmail.com" required autocomplete="on"/><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" name="password" required/><br>
            
            <button type="submit" style="font-size:15px;">Sign Up</button>

            <input type="reset" value="Reset" class="clear"style="font-size:15px;"><br><br>
           
           <a href="sign in.php" style="font-size:20px;">Already have one account</a> </h2> 
    </form>
   
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encoded_password = base64_encode($password);
if (empty($name) || empty($encoded_password) || empty($email)) {
        die('Please enter both a name and encoded_password');
        }

        // Sanitize user input
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $encoded_password = mysqli_real_escape_string($conn, $encoded_password);


        // Prepare and execute SQL query
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$encoded_password')";

        if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
        } else {
        echo "Error: " . $sql . "<br>" ;
        }

        $conn->close();
    }
?>



