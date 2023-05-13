<?php ?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css.css">
</head>

<body>
    <div class="container-fluid">
        <div style="background-color: antiquewhite;">
            <?php include('includes/header.php') ?>

            <img class="photo" src="photo/38.jfif" width="100%" height="500px">
            <center>
                <h1>Burger Meat Menue</h1>
            </center><br>
            <div class="row">
                <div class="col-3"><img src="photo/burger.jfif" width="100%"></div>
                <h1>
                    <div class="col-3"> burger-mac </div>
                </h1>
                <div class="col-3">50 lE</div>
                <div class="col-3"></div>
            </div><br>

            <div class="row">
                <div class="col-3"><img src="photo/macroyal.jfif" width="100%"></div>
                <h1>
                    <div class="col-3">McRoyal </div>
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
           
            </div><br>
            <div class="row">
                <div class="col-3"><img src="photo/double.jfif" width="100%"></div>
                <h1>
                    <div class="col-3">macdouble </div>
                </h1>
                <div class="col-3">75 lE</div>
                <div class="col-3"></div>

            </div><br>
            <div class="row">
                <div class="col-3"><img src="photo/bigta.jfif" width="100%"></div>
                <h1>
                    <div class="col-3">double-bigtasty </div>
                </h1>
                <div class="col-3">155 $</div>
                <div class="col-3"></div>

            </div><br>
            <div class="row">
                <div class="col-3"><img src="photo/mc.jfif" width="100%"></div>
                <h1>
                    <div class="col-3">Double-McRoyal</div>
                </h1>
                <div class="col-3">90 $</div>
                <div class="col-3"></div>

            </div><br>

            <div class="row">
                <div class="col-3"><img src="photo/beef.jfif" width="100%"></div>
                <h1>
                    <div class="col-3"> Beefburger </div>
                </h1>
                <div class="col-3">100 $</div>
                <div class="col-3"></div>

            </div><br>
            <div class="row">
                <div class="col-3"><img src="photo/cheese.jfif" width="100%"></div>
                <h1>
                    <div class="col-3"> cheese-burger </div>
                </h1>
                <div class="col-3">75 $</div>
                <div class="col-3"></div>

            </div><br>
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