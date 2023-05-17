<?php require('./includes/server.php');?>
<html>

<head>
    <meta charset="utf-8" />
    <title>chicken burger</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <script src="js/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css.css">
</head>

<body>
    <div class="container-fluid">
        <div style="background-color: antiquewhite;">
            <?php include('includes/header.php') ?>
            <img src="photo/che1.jfif" width="100%" height="500px">
            <center>
                <h1> Chicken Sandwiches</h1>
            </center>

             <?php foreach ($checken as $row){?>
            <div class="row">  
               <table>
                <tr>
                    <td> <img src="<?php echo $row['image'] ?>" width="400px" height="200px" /></td>
                    <td>
                        <div class="d1">
                                <h2><?php echo $row['title'] ?></h2>
                                <h4><?php echo $row['price'] ?>$</h4>
                        </div>
                    </td>
                </tr>
               </table>
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
                    <a href="https:/www.instagram.com" role="button" target="_blank"><img src="photo/21.png"
                            width="50px" height="50px"></a>
                </div><br>
                <div> <a href="addMenu.php" role="button" target="_self" style="font-size: 30px; width: 80px;">Add</a>
                    <a href="updateMenu.php" role="button" target="_self" style=" font-size: 30px;  width: 130px;">Update</a>
                    <a href="deleteMenu.php" role="button" target="_self" style=" font-size: 30px;">Delete</a>
                </div>
            </div>


</body>

</html>