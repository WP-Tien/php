<?php
session_start();
echo uniqid();

$_SESSION["ten_dang_nhap"] = "hungnguyen";

echo "<pre>",print_r($_SESSION),"</pre>";

//echo "<pre>",print_r($_SERVER),"</pre>";
?>
<a href="haha.php">aaaaaaa</a>