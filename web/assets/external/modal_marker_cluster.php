<?php

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

ob_start();
include 'data.php';
ob_end_clean();

$newData = [];
$tempArray = [];

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
                    for( $i=0; $i < count($data); $i++){
                        if( $data[$i]['id'] == $_POST['marker_in_cluster_id'][$e] ){
                            echo

                                '<div class="multi-choice result-item" data-id="'. $data[$i]['id'] .'">';

                                // Ribbon ------------------------------------------------------------------------------------------

                                if( !empty($data[$i]['ribbon']) ){
                                    echo
                                        '<figure class="ribbon">'. $data[$i]['ribbon'] .'</figure>';
                                }

                                echo
                                '<a href="'. $data[$i]['url'] .'">';

                                // Title -------------------------------------------------------------------------------------------

                                if( !empty($data[$i]['title']) ){
                                    echo
                                        '<h3>'. $data[$i]['title'] .'</h3>';
                                }

                                echo
                                    '<div class="result-item-detail">';

                                        // Image thumbnail -------------------------------------------------------------------------

                                        if( !empty($data[$i]['gallery'][0]) ){
                                            echo
                                            '<div class="image" style="background-image: url('. $data[$i]['gallery'][0] .')">';
                                                if( !empty($data[$i]['additional_info']) ){
                                                    echo
                                                    '<figure>'. $data[$i]['additional_info'] .'</figure>';
                                                }

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
                                                if( !empty($data[$i]['additional_info']) ){
                                                    echo
                                                    '<figure>'. $data[$i]['additional_info'] .'</figure>';
                                                }

                                                // Price ---------------------------------------------------------------------------

                                                if( !empty($data[$i]['price']) ){
                                                    echo
                                                        '<figure class="price">'. $data[$i]['price'] .'</figure>';
                                                }
                                            echo
                                            '</div>';
                                        }

                                        echo
                                        '<div class="description">';
                                            if( !empty($data[$i]['location']) ){
                                                echo
                                                    '<h5><i class="fa fa-map-marker"></i>'. $data[$i]['location'] .'</h5>';
                                            }

                                            // Rating ------------------------------------------------------------------------------

                                            if( !empty($data[$i]['rating']) ){
                                                echo
                                                    '<div class="rating-passive"data-rating="'. $data[$i]['rating'] .'">
                                                        <span class="stars"></span>
                                                        <span class="reviews">'. $data[$i]['reviews_number'] .'</span>
                                                    </div>';
                                            }

                                            // Category ----------------------------------------------------------------------------

                                            if( !empty($data[$i]['category']) ){
                                                echo
                                                    '<div class="label label-default">'. $data[$i]['category'] .'</div>';
                                            }

                                            // Description -------------------------------------------------------------------------

                                            if( !empty($data[$i]['description']) ){
                                                echo
                                                    '<p>'. $data[$i]['description'] .'</p>';
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