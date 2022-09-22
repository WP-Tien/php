<?php

$vegetables[0] = "corn";
$vegetables[1] = "broccoli";
$vegetables[2] = "zucchini";

echo "<pre>", print_r($vegetables) ,"</pre>";

//Lấy phần tử hiện tại trong mảng này với hàm current
echo "Current: ", current($vegetables), "<br>";
//Di chuyển con trỏ đến phần tử kế tiếp với hàm next
echo "Next: ", next($vegetables), "<br>";
//Di chuyển con trỏ ngược lại
echo "Prev: ", prev($vegetables), "<br>";
//Di chuyển con trỏ đến phần tử cuối cùng
echo "End: ", end($vegetables), "<br>";
//Di chuyển đến phần tử đầu của mảng
reset($vegetables);

echo "Current: ", current($vegetables), "<br>";

?>