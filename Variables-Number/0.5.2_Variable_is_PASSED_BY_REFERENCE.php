<?php 

    /**
     * ! if a variable that is PASSED_BY_REFERENCE is unset() inside of a funtion, only the local variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called.
     */

    function foo(&$bar){
        // unset trước khi định nghĩa $bar với việc $bar định nghĩa trước unset SẼ CÓ 2 KẾT QUẢ KHÁC NHAU
        unset($bar);  
        $bar = "blah";
    }

    $bar = 'something';
    echo "$bar \n";

    foo($bar);
    echo "$bar \n";

?>