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


    $coffee_query = "SELECT price , title , image FROM menu WHERE type = 'coffee'";
    $coffee_result = $conn->query($coffee_query);
    $coffee = $coffee_result->fetch_all(MYSQLI_ASSOC);

    $meat_query = "SELECT price , title , image FROM menu WHERE type = 'meat'";
    $meat_result = $conn->query($meat_query);
    $meat = $meat_result->fetch_all(MYSQLI_ASSOC);

    $checken_query = "SELECT price , title , image FROM menu WHERE type = 'checken'";
    $checken_result = $conn->query($checken_query);
    $checken = $checken_result->fetch_all(MYSQLI_ASSOC);

    $sauce_query = "SELECT price , title , image FROM menu WHERE type = 'sauce'";
    $sauce_result = $conn->query($sauce_query);
    $sauce = $sauce_result->fetch_all(MYSQLI_ASSOC);



    //update
    // $all_query_update = "UPDATE price , title , image FROM menu";
    // $all_result_update = $conn->query($all_query);
    // $all_update = $all_result->fetch_all(MYSQLI_ASSOC);

    // $coffee_query_update = "UPDATE price , title , image FROM menu WHERE type = 'coffee'";
    // $coffee_result_update = $conn->query($coffee_query);
    // $coffee_update = $coffee_result->fetch_all(MYSQLI_ASSOC);

 ?>