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
//     $salt = base64_encode(random_bytes(32));
// // Hash the password using the bcrypt algorithm
// $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['salt' => $salt]);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "UPDATE users SET password='$hashed_password' WHERE name='$name'";

if (mysqli_query($conn, $sql)) {
    // echo $hashed_password;
} else {
    echo "Error updating password: " . mysqli_error($conn);
}

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    
    if ($stmt->execute() === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
}

?>
