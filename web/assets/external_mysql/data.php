<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "locations_example";

$connection = mysqli_connect($serverName, $username, $password, $databaseName);
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

if( !empty( $_POST["optimized_loading"] ) ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items WHERE latitude <= " . $_POST["north_east_lat"] . " AND latitude >= " . $_POST["south_west_lat"] . " AND longitude <=" . $_POST["north_east_lng"] . " AND longitude >= " .$_POST["south_west_lng"] );
}
else {
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items" );
}

$data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );

mysqli_close($connection);

// Data for map markers

echo( json_encode($data) );