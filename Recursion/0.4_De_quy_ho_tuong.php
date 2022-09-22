<?php 

    // đệ quy hổ tương là đệ quy một hàm A gọi sang hàm B. Trong hàm B gọi lại sang hàm A. Chúng gọi lẫn nhau nên gọi là hổ tương.

    // Hàm đệ quy U
    function U($n)
    {
        if ($n < 5){ // điều kiện dừng
            return $n;
        }
        else{
            return U($n - 1) + G($n - 2);
        }
    }
    
    // Hàm đệ quy G
    function G($n)
    {
        if ($n <= 8){ // điều kiện dừng
            return $n - 3;
        }
        else{
            return U($n - 1) + G($n - 2);
        }
    }
    
    // Gọi Hàm
    
    echo G(12);


?>