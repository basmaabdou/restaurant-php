<?php require('./includes/server.php');
// $sql_create_db = "CREATE DATABASE restaurant";
mysqli_select_db($conn, "restaurant");
$sql = "CREATE TABLE services (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
    )";
?>
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <script src="js/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css.css">

</head>

<body>
    <?php include('includes/header.php') ?>
    
        <img src="photo/serlogo.jpg" width="100%" height="400px">
        <center>
            <h1>We Provide Special Services</h1>
        </center><br>
     <?php
                $hostname = "localhost";
                $dbname = "restaurant";
                $username = "root";
                $password = "";
                
                try {
                $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
                } catch (PDOException $e) {
                echo "Error connecting to database: " . $e->getMessage();
                }

                $sql = "SELECT title, description, image FROM services";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
    
            ?>
       <?php foreach ($stmt as $row ) {?>
                 <div style="display:inline-block; margin-right:20px;  ">
                 <img src="<?php echo $row['image']  ?>" height="200px" width="350px"> <br>
                <div  style="font-size: 50px;" ><?php echo '&nbsp&nbsp&nbsp ' . $row['title']  ?> <br></div>
                 <?php echo $row['description'] ?> <br><br><br>
     </div>
            <?php } ?>
            
        <div class="row">
            <div class="col-3">
                <h1>Contact With Us:</h1>
            </div>
            <div class="col-1">
                <a href="https://ar-ar.facebook.com/enespanol/" target="_blank"><img src="photo/19.png" width="50px"
                        height="50px"></a>
            </div>
            <div class="col-1">
                <a href="https:/www.twitter.com" role="button" target="_blank"><img src="photo/18.png" width="50px"
                        height="50px"></a>
            </div>
            <div class="col-1">
                <a href="https:/www.instagram.com" role="button" target="_blank"><img src="photo/21.png" width="50px"
                        height="50px"></a>
            </div><br>
            <div style="font-size: 30px;">
            <a href="addService.php" role="button" target="_self">Add</a>
            <a href="updateService.php" role="button" target="_self">Update</a>
            <a href="deleteService.php" role="button" target="_self">Delete</a></div>
        </div>
    
</body>

</html>