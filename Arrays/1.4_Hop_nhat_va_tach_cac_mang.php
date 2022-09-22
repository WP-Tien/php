<?php

//Tách mảng slice 
$fruits["good"] = "tangerine";
$fruits["better"] = "pineapple";
$fruits["best"] = "pomegranate";

$subarray = array_slice($fruits, 1, 2); // array, offset, length
// Nếu offset âm, chuỗi sẽ được đo từ phần tử cuối của mảng. Nếu length âm, chuỗi sẽ ngưng nhiều phẩn tử đó từ phần tử cuối mảng
foreach($subarray as $value)
{
	echo $value ,"<br>";
}

echo "<br>";
//hợp nhất 2 mảng merge
$vegetables = array("corn", "broccoli", "zucchini");

$produce = array_merge($fruits, $vegetables);

foreach($produce as $value)
{
	echo $value ,"<br>";
}
?>