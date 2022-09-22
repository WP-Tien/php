<?php 
  // Class miêu tả cái gì đó chung chung
  // Object miêu tả cái gì đó cụ thể 

class xe
{
	public $color = "Red"; // <- Property (đặc điểm , đặc tính ) miêu tả thuộc tính, đặc điểm của một Class
	public $red;
	// Cơ chế là gì ? (Access control modifiers)
	// Public:
	// Protected: 
  // Private

	public function run() // Method, behaviour (phương thức, hành động) (có thể có tham số truyền vào) miểu tả hành động của một class
	{
		return __METHOD__; // Hằng trong PHP lấy class::Phương thức đang chạy !
	}
}

$xe_Dap = new xe(); // Tạo đối tượng xe

echo $xe_Dap->color;
echo "</br>";

echo '<pre style="color:red; font-weight: bold">';
  echo $xe_Dap->run();
  echo "<br>";
  print_r($xe_Dap);
  
echo "</pre>";

?>