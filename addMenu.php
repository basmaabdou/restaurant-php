<!DOCTYPE html>
<?php require('./includes/server.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/css/bootstrap.min.css"> -->

    <title>Document</title>
</head>
<body style="background-color: #ead8c1;">
    <center>
        <a style="color:grey;font-size: 70px;"> Add New Item</a><br><br><br><br><br><br>
        <form method="post" style="font-size: 30px;" enctype="multipart/form-data">

            <label>Title:</label>
            <input type="text" class="form-control" name="title" required><br><br>

            <label>Price:</label>
            <input type="number" step="0.01" required name="price"><br><br>
            <label>type:</label>
            <select name="type" required>
                <option value="coffee">Coffee</option>
                <option value="dessert">Dessert</option>
                <option value="sandwitch">Sandwitch</option>
            </select><br><br>
            <input type="file" name="image"><br><br>
            <input type="submit" value="Save">
        </form>

    

    </center>
    <?php 
        foreach ($all as $row) {
              echo "<tr>";
                 echo "<td>" . $row["price"] ."&nbsp &nbsp ". "</td>" ;
                 echo "<td>" . $row["title"] ."&nbsp". "</td>";
                 echo "<td><img src='" . $row["image"] . "'></td>"."<br>";
                 echo "</tr>" ;
        }
    ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data
            $file_name = null;
            if (isset($_FILES['image'])) {
                $file_name = $_FILES['image']['name'];
                $file_tmp = $_FILES['image']['tmp_name'];
                // Set upload directory
                $upload_dir = 'uploads/menu/';
                // If directory does not exist, create it
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir);
                }
                $file_name = $upload_dir.$file_name;
                // Move uploaded file to the desired destination
                move_uploaded_file($file_tmp, $file_name);
            }

            $stmt = $conn->prepare("INSERT INTO `menu` (`title`, `price`, `image`, `type`) VALUES (?,?,?,?)");

            // Bind parameters to the statement
            $stmt->bind_param("ssss", $_POST["title"], $_POST["price"] , $file_name, $_POST["type"] );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        }

     ?>
</body>