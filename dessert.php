<?php require('./includes/server.php'); ?>
<html>

<head>
    <title>Desert</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css.css">
</head>

<body>
    <div class="container-fluid">
        <div style="background-color: antiquewhite;">
            <?php include('includes/header.php') ?>

            <img src="photo/desert.jpg" width="1525 px" height="500 px">
            <center>
                <h1>Desert</h1>
            </center>
            <?php foreach ($deserts as $row){?>
            <div class="row">  
                <div class="col-lg-4"> <img src="<?php echo $row['image'] ?>"  height="300px width="300px"></div>
                <table>
                    <tr>
                        <th>
                            <h1>
                                <div class="col-lg-4"><?php echo $row['title'] ?></div>
                            </h1>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div class="col-lg-4">PRICE <?php echo $row['price'] ?>$</div>
                        </th>
                    </tr>
                </table>
            </div> <br>
            <?php } ?>
            <!-- <table> -->
                <!-- 
              

                <tr>
                    <td> <img src="photo/Straw.png" width="350px" height="200px" /></td>
                    <td>
                        <div class="d1">
                            <center>
                                <h2>strawbary</h2>
                                <h5>price 20$</h5>
                            </center>
                        </div>
                    </td>
                </tr> -->
            <!-- </table> -->
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
                <a href="addMenu.php" role="button" target="_blank" style="font-size: 30px; width: 80px;">Add</a>
                <a href="" role="button" target="_blank" style=" font-size: 30px;  width: 130px;">Update</a>
                <a href="" role="button" target="_blank" style=" font-size: 30px;">Delete</a>
            </div>
</body>

</html>