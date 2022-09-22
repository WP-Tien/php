<?php 
    /**
     * Trong một mảng đa chiều, mỗi phần tử cũng có thể là một mảng. Và mỗi phần tử trong một mảng phụ có thể là một mảng, và cứ thế tiếp tục như vậy. Các giá trị trong mảng đa dạng được truy cập bởi sử dụng nhiều chỉ mục.
     */

    $diem_thi = array(
        "hoang" => array(
            "monVatLy" => 7,
            "monToan" => 8,
            "monHoa" => 9
        ),
        "manh" => array(
            "monVatLy" => 7,
            "monToan" => 8,
            "MonHoa" => 9
        ),
        "huong" => array(
            "monVatLy" => 8,
            "monToan" => 8,
            "monHoa" => 9
        )
    );

    /** Truy cập các giá trị của mảng đa chiều */
    echo "Điểm thi môn Vật Lý của hoang là: ";
    echo $diem_thi['hoang']['monVatLy'] . "<br>";

    echo "Điểm thi môn Toán của manh là: ";
    echo $diem_thi["manh"]['monToan'] . "<br>";

    echo "Điểm thi môn Lý của huong là: ";
    echo $diem_thi['huong']['monVatLy'] . "<br>";
?>