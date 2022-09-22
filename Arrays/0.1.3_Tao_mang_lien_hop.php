<?php 

    /**
     * Các mảng liên hợp là khá giống với các mảng số nguyên về tính năng, nhưng chúng khác nhau về chỉ mục. Mảng liên hợp sẽ có chỉ mục ở dạng chuỗi để mà bạn có thể thiết lập một liên kết mạnh giữa key và value.
     * Để lưu giữ lương của nhân viên trong một mảng, một mảng chỉ mục số sẽ không là lựa chọn tốt nhất. Thay vào đó ta sẽ sử dụng các tên nhân viên như là các key trong mảng liên hợp, và value sẽ là lương tương ứng của họ. 
     * * Chú ý: Đừng giữ mảng liên hợp bên trong dấu trích dẫn kép trong khi in, nếu không thì nó sẽ không trả về bất kỳ giá trị nào.
     */

    /** Phương thức thứ nhất để tạo mảng liên hợp. */
    $luong_nhan_vien = array("hoang" => 2000, "manh" => 1000, "huong" => 500);

    echo "Lương của nhân viên hoang là ". $luong_nhan_vien['hoang'] . "<br>";
    echo "Lương của nhân viên manh là ". $luong_nhan_vien['manh'] ."<br>";
    echo "Lương của nhân viên huong là ". $luong_nhan_vien['huong'] ."<br>";

    /** Phương thức thứ hai để tạo mảng liên hợp. */
    $luong_nhan_vien['hoang'] = "high";
    $luong_nhan_vien['manh'] = "medium";
    $luong_nhan_vien['huong'] = "low";

    echo "Mức lương của nhân viên hoang là ". $luong_nhan_vien['hoang'] ."<br>";
    echo "Mức lương của nhân viên manh là ". $luong_nhan_vien['manh'] ."<br>";
    echo "Mức lương của nhân viên huong là ". $luong_nhan_vien['huong'] ."<br>";
?>
