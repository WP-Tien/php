<?php 
    /**
     * Các mảng loại này có thể lưu trữ các số, các chuỗi và bất kỳ đối tượng nào, nhưng chỉ mục mảng thì vẫn được biểu diễn bởi các số. Theo mặc định, chỉ mục mảng bắt đầu từ 0.
     * 
     * Ví dụ
     * Mảng này có thể lưu trữ số, chuỗi và bất kì đối tượng nào, nhưng chỉ mục của chúng sẽ được biểu diễn ở dạng số. Theo mặc định chỉ mục mảng bắt đầu từ 0.
     */

    /** Phương thức thứ nhất để tạo mảng trong PHP */
    $numbers = array(1,2,3,4,5);     

    foreach( $numbers as $value ){
        echo "Giá trị phần tử mảng là $value <br>";
    }

    /** Phương thức thứ hai để tạo mảng trong PHP */
    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";
    $numbers[4] = "five";

    foreach( $numbers as $value ){
        echo "Giá trị phần tử mảng là $value <br>";
    }

?>