<?php
 require('./includes/server.php');?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/new.css">
    </head>
    <body style="background-color: #ead8c1; background-image: url('photo/t9.jpeg');">
    <center>
    <a style="color:antiquewhite;font-size: 70px;"> Delete Service</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form method="post" action=""  style="font-size: 40px;">
  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id"><br>

  <input type="submit" value="Delete" style="font-size: 20px;">&nbsp&nbsp
   <button type="submit" style="font-size: 20px;"><a href="offers menue.php">Back</a></button>
    </form></center>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the ID from the form
    $id = $_POST["id"];
  
    // Prepare and execute the SQL query
    $sql = "DELETE FROM offers WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      echo ".";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
?>