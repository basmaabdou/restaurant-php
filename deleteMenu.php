<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
</head>
<body style="background-color: #ead8c1; background-image: url('photo/download5.jpeg');">
<center>
<a style="color:grey;font-size: 70px;"> Delete Item</a><br><br><br><br><br><br>
  <form method="post" action=""  style="font-size: 30px;">
    <label for="menu_item_id">Enter the ID :</label><br><br>
    <input type="text" id="menu_item_id" name="menu_item_id"><br><br>
    <button type="submit" style="font-size: 20px;">Delete</button>
    <button type="submit" style="font-size: 20px;"><a href="menue page.php">Back</a></button>
  </form></center>
</body>
</html>
<?php
 require('./includes/server.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the ID of the menu item to delete
  $menu_item_id = $_POST['menu_item_id'];
  if (!isset($menu_item_id)) {
    die('Invalid input');
  }

  $stmt = $conn->prepare('SELECT title, price, type FROM menu WHERE id = ?');
  $stmt->bind_param('i', $menu_item_id);
  if (!$stmt->execute()) {
    die('Error loading menu item: ' . $stmt->error);
  }
  // Bind the result columns to variables
  $stmt->bind_result($title, $price, $type);
  // Fetch the row
  $has_results = $stmt->fetch();
  $stmt->close();
  

  
  $stmt = $conn->prepare('DELETE FROM menu WHERE id = ?');
  $stmt->bind_param('i', $menu_item_id);
  if (!$stmt->execute()) {
    die('Error deleting menu item: ' . $stmt->error);
  }
  $stmt->close();
 $conn->close();

  // Delete the image file associated with the menu item
  $image_path = 'path/to/images/' . $menu_item_id . '.jpg';
  if (file_exists($image_path)) {
    unlink($image_path);
  }


  exit();
}
?>
