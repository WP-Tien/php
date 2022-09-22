<?php

    // Đệ quy tuyến tính là hàm đệ quy chỉ gọi duy nhất 1 lần đến chính nó.

    // Prehistoric way
    // function tinhtong($n) {
    //     $tong = 0;
    //     for ($i = 1; $i <= $n; $i ++ ) {
    //         $tong += $i;
    //     }
    //     return $tong;
    // }

    // echo tinhtong(100);

    function tinhtong($n) {
        if ($n == 1) { return $n; } 
        return $n + tinhtong( $n -1 );
    }

    echo tinhtong(100);

?>