<?php

// ---------------------------------------------------------------------------------------------------------------------
// Example of loading data from database
// ---------------------------------------------------------------------------------------------------------------------

$currentLocation = "";

// Connection to database
$connection = mysqli_connect("localhost", "root", "", "locations_example");
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

$newData = [];
$tempArray = [];

//print_r( count($_POST["marker_in_cluster_id"]) );

//$currentLocation = $data[0];

if ( $_POST["marker_in_cluster_id"] ){
    echo
    '<div class="modal-multi-choice modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="section-title">
                <h2>Multiple Items</h2>
            </div>
            </div>
            <div class="modal-body">';
                for( $e=0; $e < count($_POST["marker_in_cluster_id"]); $e++){

                    // Select all data from "items"
                    $queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $_POST['marker_in_cluster_id'][$e] );
                    $data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );

                    // Select all data from "gallery"
                    $queryGallery = mysqli_query( $connection, "SELECT * FROM gallery WHERE item_id = " . $_POST['marker_in_cluster_id'][$e] );
                    $gallery = mysqli_fetch_all( $queryGallery, MYSQLI_ASSOC );

                    // Select all data from "reviews"
                    $queryReviews = mysqli_query( $connection, "SELECT * FROM reviews WHERE item_id = " . $_POST['marker_in_cluster_id'][$e] );
                    $reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );

                    $currentLocation = $data[0];

                    //print_r($gallery[0]['image']);

                    for( $i=0; $i < count($data); $i++){
                        if( $currentLocation['id'] == $_POST['marker_in_cluster_id'][$e] ){
                            echo

                                '<div class="multi-choice result-item" data-id="'. $currentLocation['id'] .'">';

                                // Ribbon ------------------------------------------------------------------------------------------

                                if( !empty($currentLocation['ribbon']) ){
                                    echo
                                        '<figure class="ribbon">'. $currentLocation['ribbon'] .'</figure>';
                                }

                                echo
                                '<a href="'. $currentLocation['url'] .'">';

                                // Title -------------------------------------------------------------------------------------------

                                if( !empty($data[0]['title']) ){
                                    echo
                                        '<h3>'. $data[0]['title'] .'</h3>';
                                }

                                echo
                                    '<div class="result-item-detail">';

                                        // Image thumbnail -------------------------------------------------------------------------

                                        if( !empty($gallery[0]['image']) ){
                                            echo
                                            '<div class="image" style="background-image: url('. $gallery[0]['image'] .')">';
                                                if( !empty($currentLocation['additional_info']) ){
                                                    echo
                                                    '<figure>'. $currentLocation['additional_info'] .'</figure>';
                                                }

                                                // Price ---------------------------------------------------------------------------

                                                if( !empty($currentLocation['price']) ){
                                                    echo
                                                        '<div class="price">'. $currentLocation['price'] .'</div>';
                                                }
                                            echo
                                            '</div>';
                                        }
                                        else {
                                            echo
                                            '<div class="image" style="background-image: url(assets/img/items/default.png)">';
                                                if( !empty($currentLocation['additional_info']) ){
                                                    echo
                                                    '<figure>'. $currentLocation['additional_info'] .'</figure>';
                                                }

                                                // Price ---------------------------------------------------------------------------

                                                if( !empty($currentLocation['price']) ){
                                                    echo
                                                        '<figure class="price">'. $currentLocation['price'] .'</figure>';
                                                }
                                            echo
                                            '</div>';
                                        }

                                        echo
                                        '<div class="description">';
                                            if( !empty($currentLocation['location']) ){
                                                echo
                                                    '<h5><i class="fa fa-map-marker"></i>'. $currentLocation['location'] .'</h5>';
                                            }

                                            // Rating ------------------------------------------------------------------------------

                                            if( !empty($currentLocation['rating']) ){
                                                echo
                                                    '<div class="rating-passive"data-rating="'. $currentLocation['rating'] .'">
                                                        <span class="stars"></span>
                                                        <span class="reviews">'. count($reviews) .'</span>
                                                    </div>';
                                            }

                                            // Category ----------------------------------------------------------------------------

                                            if( !empty($currentLocation['category']) ){
                                                echo
                                                    '<div class="label label-default">'. $currentLocation['category'] .'</div>';
                                            }

                                            // Description -------------------------------------------------------------------------

                                            if( !empty($currentLocation['description']) ){
                                                echo
                                                    '<p>'. $currentLocation['description'] .'</p>';
                                            }
                                        echo
                                        '</div>
                                    </div>
                                </a>
                            </div>';
                        }
                    }

                }
            echo
            '</div>
        </div>
    </div>';

    //echo json_encode($newData);
}

mysqli_close($connection);