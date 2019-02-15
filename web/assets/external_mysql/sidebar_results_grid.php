<?php

// ---------------------------------------------------------------------------------------------------------------------
// Example of loading data from database
// ---------------------------------------------------------------------------------------------------------------------

$data = [];
$gallery = [];
$reviewsNumber = [];

if( !empty( $_POST['markers'] ) ){

    $connection = mysqli_connect("localhost", "root", "", "locations_example");
    if (!$connection)  die("Connection failed: " . mysqli_connect_error());

    mysqli_set_charset($connection, "utf8");

    for( $i=0; $i < count($_POST['markers']); $i++){
        $queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $_POST['markers'][$i] );
        array_push( $data, mysqli_fetch_assoc( $queryData ) );

        // gallery
        $queryGallery = mysqli_query( $connection, "SELECT image FROM gallery WHERE item_id = " . $_POST['markers'][$i] );
        array_push( $gallery, mysqli_fetch_assoc( $queryGallery ) );

        // reviews
        $queryReviews = mysqli_query( $connection, "SELECT rating FROM reviews WHERE item_id = " . $_POST['markers'][$i] );
        $reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );
        array_push( $reviewsNumber, count($reviews ) );
    }

    mysqli_close($connection);
}

// End of example ------------------------------------------------------------------------------------------------------

if( !empty($_POST['markers']) ){

    for( $i=0; $i < count($data); $i++){
        for( $e=0; $e < count($_POST['markers']); $e++){
            if( $data[$i]['id'] == $_POST['markers'][$e] ){

                echo

                '<div class="item" data-id="'. $data[$i]['id'] .'">';

                    // Ribbon ------------------------------------------------------------------------------------------

                    if( !empty($data[$i]['ribbon']) ){
                        echo
                            '<figure class="ribbon">'. $data[$i]['ribbon'] .'</figure>';
                    }

                    echo
                    '<a href="'. $data[$i]['url'] .'">';

                        echo
                        '<div class="description">';

                            // Additional Info -------------------------------------------------------------------------

                            if( !empty($data[$i]['additional_info']) ){
                                echo
                                '<figure>'. $data[$i]['additional_info'] .'</figure>';
                            };

                            // Category --------------------------------------------------------------------------------

                            if( !empty($data[$i]['category']) ){
                                echo
                                '<div class="label label-default">'. $data[$i]['category'] .'</div>';
                            };

                            // Title -----------------------------------------------------------------------------------

                            if( !empty($data[$i]['title']) ){
                                echo
                                '<h3>'. $data[$i]['title'] .'</h3>';
                            };

                            if( !empty($data[$i]['location']) ){
                                echo
                                '<h4>'. $data[$i]['location'] .'</h4>';
                            };

                        echo
                        '</div>
                        <!--end description-->';

                        // Image thumbnail -------------------------------------------------------------------------

                            if( !empty($data[$i]['gallery'][0]) ){
                                echo
                                '<div class="image" style="background-image: url('. $data[$i]['gallery'][0] .')">';

                                    // Price ---------------------------------------------------------------------------

                                    if( !empty($data[$i]['price']) ){
                                        echo
                                            '<div class="price">'. $data[$i]['price'] .'</div>';
                                    }
                                echo
                                '</div>';
                            }
                            else {
                                echo
                                '<div class="image" style="background-image: url(assets/img/items/default.png)">';

                                    // Price ---------------------------------------------------------------------------

                                    if( !empty($data[$i]['price']) ){
                                        echo
                                            '<figure class="price">'. $data[$i]['price'] .'</figure>';
                                    }
                                echo
                                '</div>';
                            };

                        echo
                        '<!--end image-->
                    </a>
                    <div class="additional-info">';

                        // Rating --------------------------------------------------------------------------------------

                        if( !empty($data[$i]['rating']) ){
                            echo
                                '<div class="rating-passive"data-rating="'. $data[$i]['rating'] .'">
                                    <span class="stars"></span>
                                    <span class="reviews">'. $reviewsNumber[$i] .'</span>
                                </div>';
                        };

                        echo
                        '<div class="controls-more">
                            <ul>
                                <li><a href="#">Add to favorites</a></li>
                                <li><a href="#">Add to watchlist</a></li>
                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                            </ul>
                        </div>
                        <!--end controls-more-->
                    </div>
                    <!--end additional-info-->
                </div>
                <!--end item-->';


            }
        }
    }

}