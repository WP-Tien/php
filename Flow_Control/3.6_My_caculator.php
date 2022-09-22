<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<?php 

	if(isset($_POST["sothu1"]) && isset($_POST["sothu2"]) && isset($_POST["pheptoan"]))
	{
		$number1 = $_POST["sothu1"];
		$number2 = $_POST["sothu2"];
		$calculate = $_POST["pheptoan"]; //operation	

		switch ($calculate) {
			case '+':
				$result = $number1 + $number2;
				break;
			case '-':
				$result = $number1 - $number2;
				break;
			case '*':
				$result = $number1 * $number2;
				break;
			case '/':
				$result = $number1 / $number2;
				break;			
			case '%':
				$result = $number1 % $number2;
				break;	
			default:
				$result = "Nhập + - * / %";
				break;
		}
	}

	?>
	<body>
		<div style="margin:30px auto; width: 300px; height: 500px;">
			<form action="" method="POST" role="form">
				<legend><?php echo (isset($result)) ? "Kết quả : " .$result : "Mô phỏng máy tính điện tử"; ?></legend>

				<div class="form-group">
					<label for="">Số thứ nhất</label>
					<input type="text" name="sothu1" class="form-control" id="" value="<?php echo (isset($number1)) ? "$number1" : "";?>">
					<label for="">Phép toán</label>
					<input type="text" name="pheptoan" class="form-control" id="" value="<?php echo (isset($calculate)) ? "$calculate" : "";?>">
					<label for="">Số thứ hai</label>
					<input type="text" name="sothu2" class="form-control" id="" value="<?php echo (isset($number2)) ? "$number2" : "";?>">
				</div>
				<button type="submit" class="btn btn-primary">Kết quả</button>
			</form>
		</div>
		
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 		<script src="Hello World"></script>
	</body>
</html>