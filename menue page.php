<?php 
require('./includes/server.php');
$sql_create_db = "CREATE DATABASE restaurant";
mysqli_select_db($conn, "restaurant");
// Create table
// Create table
$sql = "CREATE TABLE menu (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
    )";

?>
<html>

<head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <script src="js/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css.css">
</head>

<body style="background-color: antiquewhite;height: 100%;">
    <?php include('includes/header.php') ?>
    <br>
    <div class="container-fluid">
        <div>



            <center>
                <h1> Our Menue</h1><br><br>
            </center>
            <div class="row">
                <div class="col-md-3  text-center">
                    <a href="cafe.php"><img src="photo/16.jpeg" class="menu-Img" />

                        <h1>
                            <div> Cafe </div>
                        </h1>
                    </a><br>
                </div>

                <div class="col-md-3  text-center">
                    <a href="meat menue.php"> <img src="photo/25.jfif" class="menu-Img" />

                        <h1>
                            <div>Meats </div>
                        </h1>
                    </a>
                </div>

                <div class="col-md-3  text-center">
                    <a href="chiken burger.php"> <img src="photo/23.jpg" class="menu-Img" />
                        <h1>
                            <div>Chickens </div>
                        </h1>
                    </a>
                </div>

                <div class="col-md-3  text-center">
                    <a href="souce.php"> <img src="photo/40.jfif" class="menu-Img" />
                        <h1>
                            <div> sauce </div>
                        </h1>
                    </a>
                </div>

            </div><br>
            <div class="row">
                <div class="col-md-3  text-center">
                    <a href="dessert.php"> <img src="photo/d2.jpg" class="menu-Img" />
                        <h1>
                            <div> Desserts</div>
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #c7baab;">
        <span class="contact">Contact us with:</span>
        <div id="contact-box">
            <a href="https://ar-ar.facebook.com/enespanol/" role="button" target="_blank"><img src="photo/19.png"></a>
            <a href="https:/www.twitter.com" role="button" target="_blank"><img src="photo/18.png"></a>
            <a href="https://www.instagram.com/" role="button" target="_blank"><img src="photo/21.png"></a>
            <a href="addMenu.php" role="button" target="_blank">Add</a>
            <a href="" role="button" target="_blank">Update</a>
            <a href="" role="button" target="_blank">Delete</a>
        </div>
    </footer>
</body>

</html>