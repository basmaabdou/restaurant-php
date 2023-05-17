<?php require('./includes/server.php');?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
</head>
<body style=" background-image: url('photo/t9.jpeg');">
<center>
       <br><br> <a style="color:antiquewhite;font-size: 80px;"> Add New Offer</a><br><br><br><br><br><br><br>
<form method="POST"  style="font-size: 50px;" enctype="multipart/form-data">
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $title = $_POST['title'];
    $file_name = null;
   if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
                // Set upload directory
        $upload_dir = 'uploads/offers/';
                // If directory does not exist, create it
        if (!is_dir($upload_dir)) {
             mkdir($upload_dir);
       }
        $file_name = $upload_dir.$file_name;
                // Move uploaded file to the desired destination
        move_uploaded_file($file_tmp, $file_name);
            }

        $stmt = $conn->prepare("INSERT INTO offers (title, image) VALUES (?,?)");

            // Bind parameters to the statement
        $stmt->bind_param("ss", $title , $file_name);


        $stmt->execute();
        $stmt->close();
        $conn->close();
        }
?>