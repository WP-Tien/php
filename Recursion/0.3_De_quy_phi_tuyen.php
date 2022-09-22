<?php 
    // Là loại đệ quy mà trong hàm có dùng vòng lặp để gọi lại chính nó.

    function pheptinh($n) {
        if ($n < 6) {
            return $n;
        } else {
            $tong = 0;
            for ($i = 1; $i < $n; $i++) {
                $tong += pheptinh($n -$i);
            }
            return $tong;
        }
    }

    echo pheptinh(6);

?>