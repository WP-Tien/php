<?php 

require_once "Magento/Lib/Student.php";

// () is optional 
$student = new Magento\Lib\Student();

echo '<pre style="color:red; font-weight:bold">';
print_r($student);
echo '</pre>';

?>