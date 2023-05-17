<?php require('./includes/server.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">

    <title>Document</title>
</head>

<body style=" background-image: url('photo/download5.jpeg');">
    <center>
        <a style="color:grey;font-size: 70px;"> Update Item</a><br><br><br><br><br><br>
        <form method="post" style="font-size: 30px;" enctype="multipart/form-data">
         <label>Id:</label><br>
            <input type="number" class="form-control" name="id" required><br><br>

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
            </select><br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="file" name="image"><br><br>
            <input type="submit" value="Update" style="font-size: 20px;">&nbsp&nbsp
            <button type="submit" style="font-size: 20px;"><a href="menue page.php">Back</a></button>
        </form>
    </center>
</body>    


<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $id = $_POST['id'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $type = $_POST['type'];

  // Update database record
 
  if (isset($_FILES['image'])|| $_FILES['image']['size'] > 0) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    // Set upload directory
    $upload_dir = 'uploads/menu/';
    $file_name = $upload_dir.$file_name;
    // Move uploaded file to the desired destination
    move_uploaded_file($file_tmp, $file_name);
} $sql = "UPDATE menu SET title='$title', price='$price', type='$type', image='$file_name' WHERE id=$id";
  $result = $conn->query($sql);
  if (mysqli_query($conn, $sql)) {
    echo ".";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

$result = $conn->query($sql);
  exit();
}
?>