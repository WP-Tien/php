<?php 

    // vẽ case tree để xem
    function Fibo($n) {
        if( $n < 2 ) {
            return $n; // return lại 8 giá trị Fibo(1)
        } else {
            return (Fibo($n -2) + Fibo($n -1 ));
        }
    }

    echo Fibo(6);

?>