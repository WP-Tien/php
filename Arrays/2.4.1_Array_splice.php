<?php 

/**
 * array_splice -- Remove a portion of the array and replace it with something else.
 * @param input the input array.
 * @param offset nếu dương, bắt đầu xóa phần bắt đầu từ đầu phần tử trong mảng input. Nếu âm , xóa phần tử bắt đầu từ cuối phần tử mảng.  ( bắt đầu từ 1,2,3,4 ...) 
 * @param length Nếu length bị bỏ qua thì xóa tất cả từ offset. Nếu length được chỉ định và dương thì sẽ xóa số phần tử theo length. Nếu có set và âm sẽ ko loại bỏ phần tử(theo số length) từ cuối mảng. 
 * @param replacement  
 */

    $input = array("red", "green", "blue", "yellow");   
    $n = count($input); 
    // array_splice($input, 2); // red, green.
    // array_splice($input, 1, -1); // red, yellow 
    // array_splice($input, 1, 1); // red, blue, yellow
    // array_splice($input, 1, $n, "orange" ); // dùng count để xóa hết phần tử

    // lấy vị trí ngược lại nếu offset âm. nhưng length vẫn bth.
    // array_splice($input, -1, 1, array("black", "maroon") ); // red green blue black maroon 

    // length 0 nên ko remove cái nào hết
    array_splice($input, 3, 0, "purple"); // red green blue purple yellow 

    print_r($input);
?>