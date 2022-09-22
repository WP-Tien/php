<?php 

$arr = ['car', 'xe buyt', 'xe may'];

// foreach(){
// }


$search_result = array_search_partial( $arr, 'xe' );
print_r( $search_result );

function array_search_partial( $array, $keyword ){
    $result = array();

    foreach( $array as $index => $value ){
        if( strpos( $value, $keyword ) !== false ){
            $result[] = $value; 
        }
    }   

    return $result;
}


