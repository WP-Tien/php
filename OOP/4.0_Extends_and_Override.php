<?php 
require_once "class/Teacher_class.php";

$teacher = new Teacher();
$teacher->setName('Nguyen Huu Tien');
$teacher->show_info();

echo '<pre style="color:red; font-weight: bold">';
print_r($teacher);
echo '<pre>';
?>