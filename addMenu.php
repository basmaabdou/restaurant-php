<!DOCTYPE html>
<?php require('./includes/server.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
</head>
<body style=" background-image: url('photo/download5.jpeg');">
    <center>
       <br><br> <a style="color:bisque;font-size: 70px;"> Add New Item</a><br><br><br><br><br><br><br>
        <form method="post" style="font-size: 30px;" enctype="multipart/form-data">

            <label>Title:</label><br>
            <input type="text" class="form-control" name="title" required><br><br>

            <label>Price:</label><br>
            <input type="number" step="0.01" required name="price"><br><br>
            <label>Type:</label><br>
            <select name="type" required>
                <option value="coffee">Coffee</option>
                <option value="checken">Checken Burger</option>
                <option value="meat">Meat Burger</option>
                <option value="dessert">Dessert</option> 
                <option value="sauce">Sauce</option> 
            </select><br><br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Upload:
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <br> &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp<input type="file" name="image"><br><br>
            <input type="submit" value="Save" style="font-size: 15px;">&nbsp&nbsp
            <button type="submit" style="font-size: 15px;"><a href="menue page.php">Back</a></button>
        </form> 
    </center>
    </body>

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

            $stmt = $conn->prepare("INSERT INTO menu (title, price, image, type) VALUES (?,?,?,?)");

            // Bind parameters to the statement
            $stmt->bind_param("ssss", $_POST["title"], $_POST["price"] , $file_name, $_POST["type"] );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        }

     ?>
