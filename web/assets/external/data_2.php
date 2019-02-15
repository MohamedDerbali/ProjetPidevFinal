<?php

//var_dump($_POST);

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

// Remove this example in your live site -------------------------------------------------------------------------------

ob_start();
include 'data.php';
ob_end_clean();

$newData = [];

if( $_POST["category"] == "" && $_POST["city"] == "" ){
    echo json_encode($data);
}
elseif( $_POST["category"] && $_POST["city"] ){
    for( $i=0; $i < count($data); $i++){
        if( strcasecmp( $data[$i]['category'], $_POST['category'] ) == 0 && !empty( $data[$i]['city'] ) && $data[$i]['city']  == $_POST['city'] ){
            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}
elseif ( $_POST["city"] ){
    for( $i=0; $i < count($data); $i++){
        if( !empty( $data[$i]['city'] ) ){
            if( $data[$i]['city'] == $_POST['city'] ){
                array_push( $newData, $data[$i] );
            }
        }
    }
    echo json_encode($newData);
}
elseif ( $_POST["category"] ){
    for( $i=0; $i < count($data); $i++){
        if( strcasecmp($data[$i]['category'], $_POST['category'] ) == 0 ){
            array_push( $newData, $data[$i] );
        }
    }
    echo json_encode($newData);
}


// End of example ------------------------------------------------------------------------------------------------------