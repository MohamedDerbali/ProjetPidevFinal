<?php

$connection = mysqli_connect("localhost", "root", "", "locations_example");
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

if( $_POST["category"] == "" && $_POST["city"] == "" ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items" );
}
if( $_POST["category"] && $_POST["city"] ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items WHERE category = '" . $_POST["category"] . "' AND city = '" . $_POST["city"] . "'" );
}
elseif( $_POST["category"] ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items WHERE category = '" . $_POST["category"] . "'" );
}
elseif( $_POST["city"] ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image, marker_color FROM items WHERE city = '" . $_POST["city"] . "'" );
}

$data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );
mysqli_close($connection);

// Data for map markers

echo( json_encode($data) );
