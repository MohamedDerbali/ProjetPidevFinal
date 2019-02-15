<?php

// ---------------------------------------------------------------------------------------------------------------------
// Example of loading data from database
// ---------------------------------------------------------------------------------------------------------------------

$currentLocation = "";

// Connection to database
$connection = mysqli_connect("localhost", "root", "", "locations_example");
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

// Select all data from "items"
$queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $_POST['id'] );
$data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );

// Select all data from "gallery"
$queryGallery = mysqli_query( $connection, "SELECT * FROM gallery WHERE item_id = " . $_POST['id'] );
$gallery = mysqli_fetch_all( $queryGallery, MYSQLI_ASSOC );

// Select all data from "reviews"
$queryReviews = mysqli_query( $connection, "SELECT * FROM reviews WHERE item_id = " . $_POST['id'] );
$reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );

// Select all data from "tags"
$queryTags = mysqli_query( $connection, "SELECT * FROM tags WHERE item_id = " . $_POST['id'] );
$tags = mysqli_fetch_all( $queryTags, MYSQLI_ASSOC );

// Select all data from "opening_hours"
$queryOpeningHours = mysqli_query( $connection, "SELECT * FROM opening_hours WHERE item_id = " . $_POST['id'] );
$opening_hours = mysqli_fetch_all( $queryOpeningHours, MYSQLI_ASSOC );

// Select all data from "today_menu"
$queryTodayMenu = mysqli_query( $connection, "SELECT * FROM today_menu WHERE item_id = " . $_POST['id'] );
$todayMenu = mysqli_fetch_all( $queryTodayMenu, MYSQLI_ASSOC );

// Select all data from "schedule"
$querySchedule = mysqli_query( $connection, "SELECT * FROM schedule WHERE item_id = " . $_POST['id'] );
$schedule = mysqli_fetch_all( $querySchedule, MYSQLI_ASSOC );

// Select all data from "description_list"
$queryDescriptionList = mysqli_query( $connection, "SELECT * FROM description_list WHERE item_id = " . $_POST['id'] );
$description_list = mysqli_fetch_all( $queryDescriptionList, MYSQLI_ASSOC );

$currentLocation = $data[0];

mysqli_close($connection);

// End of example //////////////////////////////////////////////////////////////////////////////////////////////////////


// Basic Item Information ----------------------------------------------------------------------------------------------

echo
'<div class="sidebar-content" data-id="'. $currentLocation['id'] .'">
    <div class="back"></div>
    <!--end back-button-->

    <div class="controls-more">
        <ul>
            <li><a href="#">Add to favorites</a></li>
            <li><a href="#">Add to watchlist</a></li>
        </ul>
    </div>
    <!--end controls-more-->

    <div class="section-title">
        <a href="'. $currentLocation['url'] .'" class="btn btn-primary btn-framed btn-rounded btn-xs full-detail">Full Detail</a>';

        // Title -------------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['title']) ){
            echo
                '<h2>'. $currentLocation['title'] .'</h2>';
        }

        // Location ----------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['location']) ){
            echo
                '<h4>'. $currentLocation['location'] .'</h4>';
        }

        // Category ----------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['category']) ){
            echo
                '<div class="label label-default">'. $currentLocation['category'] .'</div>';
        }

        // Ribbon ----------------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['ribbon']) ){
            echo
                '<figure class="ribbon">'. $currentLocation['ribbon'] .'</figure>';
        }

        // Rating ----------------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['rating']) ){
            echo
            '<div class="rating-passive" data-rating="'. $currentLocation['rating'] .'">
                <span class="stars"></span>
                <span class="reviews">'. count($reviews) .'</span>
            </div>';
        }
    echo
    '</div>
    <!--end section-title-->';

// Phone --------------------------------------------------------------------------------------------------------------

if( !empty($currentLocation['phone']) ){
    echo
    '<h5><i class="fa fa-phone"></i>'. $currentLocation['phone'] .'</h5>';
}

// Email --------------------------------------------------------------------------------------------------------------

if( !empty($currentLocation['email']) ){
    echo
        '<h5><i class="fa fa-envelope"></i>'. $currentLocation['email'] .'</h5>';
}

// Website -------------------------------------------------------------------------------------------------------------

if( !empty($currentLocation['website']) ){
    echo
        '<h5><a href="'. $currentLocation['website'] .'"><i class="fa fa-globe"></i>'. $currentLocation['website'] .'</a></h5>';
}

// Gallery -------------------------------------------------------------------------------------------------------------

if( !empty($gallery) ){
    $galleryItem = "";
    for($i=0; $i < count($gallery); $i++){
        $galleryItem .= '<img src="'. $gallery[$i]["image"] .'" alt="">';
    }
    echo
    '<div class="gallery-wrapper">';

        // Price -------------------------------------------------------------------------------------------------------------

        if( !empty($currentLocation['price']) ){
            echo
                '<div class="price">'. $currentLocation['price'] .'</div>';
        }

        echo
        '<div class="gallery owl-carousel" data-owl-nav="0" data-owl-dots="1">'. $galleryItem .'</div>
    </div>
    <!--end gallery-->';
}
else {
    echo
    '<div class="image" style="background-image: url(assets/img/items/default.png); height: 290px;"></div>
    <!--end gallery-->';
}

// Description ---------------------------------------------------------------------------------------------------------

if( !empty($currentLocation['description']) ){
    echo
    '<section>
        <h3>About</h3>
        <div class="read-more"><p>'. $currentLocation['description'] .'</p></div>
    </section>
    <!--end about-->';
}

// Tags ----------------------------------------------------------------------------------------------------------------

if( !empty($tags) ){
    $tagItem = "";
    for($i=0; $i < count($tags); $i++){
        $tagItem .= '<li>'. $tags[$i]["tag"] .'</li>';
    }
    echo
    '<section>
        <h3>Features</h3>
        <ul class="tags">'.  $tagItem .'</ul>
    </section>
    <!--end tags-->';
}

// Today Menu ----------------------------------------------------------------------------------------------------------

if( !empty($todayMenu) ){
    echo
    '<section>
        <h3>Today menu</h3>';
    for($i=0; $i < count($todayMenu); $i++){
        echo
            '<ul class="list-unstyled list-descriptive icon">
                <li>
                    <i class="fa fa-cutlery"></i>
                    <div class="description">
                        <strong>'. $todayMenu[$i]['meal_type'] .'</strong>
                        <p>'. $todayMenu[$i]['meal'] .'</p>
                    </div>
                </li>
            </ul>
            <!--end list-descriptive-->';
    }
    echo
    '</section>
    <!--end today-menu-->';
}

// Schedule ------------------------------------------------------------------------------------------------------------

if( !empty($schedule) ){
    echo
    '<section>
        <h3>Schedule</h3>';
    for($i=0; $i < count($schedule); $i++){
        echo
            '<ul class="list-unstyled list-schedule">
                <li>
                    <div class="left">
                        <strong class="promoted">'. $schedule[$i]['date'] .'</strong>
                        <figure>'. $schedule[$i]['time'] .'</figure>
                    </div>
                    <div class="right">
                        <strong>'. $schedule[$i]['location_title'] .'</strong>
                        <figure>'. $schedule[$i]['location_address'] .'</figure>
                    </div>
                </li>
            </ul>
            <!--end list-schedule-->';
    }
    echo
    '</section>
    <!--end schedule-->';
}

// Video ---------------------------------------------------------------------------------------------------------------

if( !empty($currentLocation['video']) ){
    echo
    '<section>
        <h3>Video presentation</h3>
        <div class="video">'. $currentLocation['video'] .'</div>
    </section>
    <!--end video-->';
}

// Description list ----------------------------------------------------------------------------------------------------

if( !empty($description_list) ){
    echo
    '<section>
        <h3>Property Details</h3>';
    for($i=0; $i < count($description_list); $i++){
        echo
            '<dl>
                <dt>'. $description_list[$i]['title'] .'</dt>
                <dd>'. $description_list[$i]['value'] .'</dd>
            </dl>
            <!--end property-details-->';
    }
    echo
    '</section>
    <!--end description-list-->';
}

// Opening Hours -------------------------------------------------------------------------------------------------------

if( !empty($opening_hours) ){
    $openingHoursItem = "";
    echo
    '<section>
        <h3>Opening Hours</h3>
        <dl>';
            for($i=0; $i < count($opening_hours); $i++){
                echo
                    '<dt>'. $opening_hours[$i]["day"] .'</dt>';
                    if( $opening_hours[$i]["closed_day"] == 1 ){
                        echo '<dd>Closed</dd>';
                    }
                    else {
                        echo '<dd>'. $opening_hours[$i]["time_open"] .' - '. $opening_hours[$i]["time_close"] .'</dd>';
                    }
            };
        echo
        '</dl>
    </section>
    <!--end opening-hours-->';
}

// Reviews -------------------------------------------------------------------------------------------------------------

if( !empty($reviews) ){
    echo
    '<section>
        <h3>Latest reviews</h3>';
    for($i=0; $i < 2; $i++){
        echo
            '<div class="review">
                <div class="image">
                    <div class="bg-transfer" style="background-image: url('. $reviews[$i]["author_image"] .')"></div>
                </div>
                <div class="description">
                    <figure>
                        <div class="rating-passive" data-rating="'.  $reviews[$i]["rating"] .'">
                            <span class="stars"></span>
                        </div>
                        <span class="date">'.  $reviews[$i]["date"] .'</span>
                    </figure>
                    <p>'.  $reviews[$i]['review_text'] .'</p>
                </div>
            </div>
            <!--end review-->';
    }
    echo
    '</section>
    <!--end reviews-->';
}

    echo
    '<section>
        <h3>Share This Listing</h3>
        <div class="social-share"></div>
    </section>';

echo
'</div>';