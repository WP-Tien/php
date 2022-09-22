<?php 

    echo "LINE: ". __LINE__ . "<br>"; // get line 

    /**
     * ! DIR 
     */
    echo "DIR: ". __DIR__ . "<br>";
    if (file_exists(__DIR__)) {
        echo "yes";
    } else {
        echo "no";
    }
    echo "<br>";
    if (is_file(__DIR__)) {
        echo "yes";
    } else {
        echo "no";
    }
    echo "<br>";
    if (is_dir(__DIR__)) {
        echo "yes";
    } else {
        echo "no";
    }

    /**
     * ! FILE
     */
    echo "<br>";
    echo "FILE: ". __FILE__ . "<br>";
    if(file_exists(__FILE__)){
        echo "yes";
    } else {
        echo "no";
    }
    echo "<br>";
    if(is_dir(__FILE__)){
        echo "yes";
    } else {
        echo "no";
    }


?>