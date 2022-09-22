<?php
session_start();
//session_destroy();
unset($_SESSION["ten_dang_nhap"]);
echo $_SESSION["ten_dang_nhap"];
?>