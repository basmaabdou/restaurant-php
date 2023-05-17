<?php require('./includes/server.php');
// $sql_create_db = "CREATE DATABASE restaurant";
mysqli_select_db($conn, "restaurant");
$sql = "CREATE TABLE offers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
    )";
?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css menue.css">
    <title>OFFERS</title>
    <link rel="stylesheet" href="css/style.css.css">
</head>

<body>
    <?php include('includes/header.php') ?>

    <img src="photo/o10.jpeg" width="100%" height="400px"><br><br>
    <center>
        <h1>Mac offers</h1>
    </center><br><br>
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

                $sql = "SELECT title, image FROM offers";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
    ?>

<?php foreach ($stmt as $row ) {?>
                 <div style="display:inline-block; margin-right:20px;  ">
                 <img src="<?php echo $row['image']  ?>" height="200px" width="350px"> <br>
                <div  style="font-size: 25px;"><?php echo '&nbsp&nbsp&nbsp ' . $row['title']  ?> <br></div>
                  <br><br><br>
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
    </div>
    <div style="font-size: 30px;">
            <a href="addOffer.php" role="button" target="_self">Add</a>
            <a href="updateOffer.php" role="button" target="_self">Update</a>
            <a href="deleteOffer.php" role="button" target="_self">Delete</a></div>
        </div>
    
</body>

</html>