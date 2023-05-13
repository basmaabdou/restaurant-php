<?php 

 // Connect to MySQL database
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "restaurant";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 
     //select
    $all_query = "SELECT price , title , image FROM menu";
    $all_result = $conn->query($all_query);
    $all = $all_result->fetch_all(MYSQLI_ASSOC);

    $deserts_query = "SELECT price , title , image FROM menu WHERE type = 'dessert'";
    $deserts_result = $conn->query($deserts_query);
    $deserts = $deserts_result->fetch_all(MYSQLI_ASSOC);


    $sandwitch_query = "SELECT price , title , image FROM menu WHERE type = 'sandwitch'";
    $sandwitch_result = $conn->query($sandwitch_query);
    $sandwitch = $sandwitch_result->fetch_all(MYSQLI_ASSOC);

    $coffee_query = "SELECT price , title , image FROM menu WHERE type = 'coffee'";
    $coffee_result = $conn->query($coffee_query);
    $coffee = $coffee_result->fetch_all(MYSQLI_ASSOC);
 ?>