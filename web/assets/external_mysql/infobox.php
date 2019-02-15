<?php

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

$currentLocation = "";
$reviewsNumber = [];

// Connection to database
$connection = mysqli_connect("localhost", "root", "", "locations_example");
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

// Select all data from "items"
$queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $_POST['id'] );
$data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );

// Select all data from "gallery"
$queryGallery = mysqli_query( $connection, "SELECT image FROM gallery WHERE item_id = " . $_POST['id'] );
$gallery = mysqli_fetch_all( $queryGallery, MYSQLI_ASSOC );

// Select all data from "reviews"
$queryReviews = mysqli_query( $connection, "SELECT * FROM reviews WHERE item_id = " . $_POST['id'] );
$reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );
array_push( $reviewsNumber, count($reviews ) );

$currentLocation = $data[0];

mysqli_close($connection);
/*

for( $i=0; $i < count($data); $i++){
    if( $data[$i]['id'] == $_POST['id'] ){
        $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
    }
}
*/

// End of example //////////////////////////////////////////////////////////////////////////////////////////////////////

// Infobox HTML code

echo
'<div class="item infobox" data-id="'. $currentLocation['id'] .'">
    <a href="'. $currentLocation['url'] .'">
        <div class="description">';

            // Category ------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['category']) ){
                echo
                    '<div class="label label-default">'. $currentLocation['category'] .'</div>';
            }

            // Title ---------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['title']) ){
                echo
                    '<h3>'. $currentLocation['title'] .'</h3>';
            }

            // Location ------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['location']) ){
                echo
                    '<h4>'. $currentLocation['location'] .'</h4>';
            }
            echo

        '</div>
        <!--end description-->';

        // Image thumbnail -------------------------------------------------------------------------

        if( !empty($gallery[0]["image"]) ){
            echo
            '<div class="image" style="background-image: url('. $gallery[0]["image"] .')"></div>';
        }
        else {
            echo
            '<div class="image" style="background-image: url(assets/img/items/default.png)"></div>';
        }

        echo
        '<!--end image-->
    </a>';
if( !empty( $currentLocation['rating'] ) ){
    echo
    '<div class="rating-passive">';
        for($i=0; $i < 5; $i++){
            if( $i < $currentLocation['rating'] ){
                echo '<span class="stars"><figure class="active fa fa-star"></figure></span>';
            }
            else {
                echo '<span class="stars"><figure class="fa fa-star"></figure></span>';
            }
        }
        echo
        '<span class="reviews">'. count($reviews) .'</span>
    </div>';
}
echo
    '<div class="controls-more">
        <ul>
            <li><a href="#">Add to favorites</a></li>
            <li><a href="#">Add to watchlist</a></li>
        </ul>
    </div>
    <!--end controls-more-->

</div>
<!--end item-->';
