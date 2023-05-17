<?php require('./includes/server.php');?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
</head>
<body style=" background-image: url('photo/t9.jpeg');">
<center>
       <br><br> <a style="color:antiquewhite;font-size: 70px;"> Update Service</a><br><br><br><br><br><br><br>
<form method="POST"  style="font-size: 40px;" enctype="multipart/form-data">
<label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br><br>

  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title"><br><br>

  
  <label for="image">Image:</label><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="file" id="image" name="image" ><br><br>

  <input type="submit" value="Submit" style="font-size: 20px;">&nbsp&nbsp
   <button type="submit" style="font-size: 20px;"><a href="offers menue.php">Back</a></button>
</form></center>
</body>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $id = $_POST["id"];
    $title = $_POST["title"];

    if (isset($_FILES['image'])|| $_FILES['image']['size'] > 0) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        // Set upload directory
        $upload_dir = 'uploads/offers/';
        $file_name = $upload_dir.$file_name;
        // Move uploaded file to the desired destination
        move_uploaded_file($file_tmp, $file_name);
    }
    // Prepare and execute the SQL query
    $sql = "UPDATE offers SET title='$title', image='$file_name' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo ".";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    $result = $conn->query($sql);
    exit();

}

?>