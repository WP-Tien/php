<?php 

    $bug = array (
        0 => ''
    );

    if ( $bug ) {
        echo '1';
    }

    if ( !empty( $bug ) ) {
        echo '1';
    }

    if ( $bug[0] ) {
        echo '1';
    }

?>