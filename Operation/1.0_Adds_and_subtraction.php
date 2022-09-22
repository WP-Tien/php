<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Adds and subtraction </title>
</head>
<?php
	$operand1 = '';
	$operand2 = '';
	$subtraction = '';
	$summation = '';
	
	if ($_POST) {
		$operand1 = $_POST["txtOperand1"];
		$operand2 = $_POST["txtOperand2"];
		$summation = $operand1 + $operand2;

		if($operand1 > $operand2)
		$subtraction = $operand1 - $operand2;
		else
		$subtraction = $operand2 - $operand1;
	} 
?>
<body>
	<form name="" method="post" action="">
		<table border="0" align="center" width="500">
		<tr>
			<caption> Subtraction and summation </caption>
			<td colspan="2" align="center"> NHT </td>
		</tr>
		<tr>
			<td>Input your operand 1: </td>
			<td><input name="txtOperand1" type="text" value="<?php echo$operand1;?>" /></td>
		</tr>
		<tr>
			<td>Input your operand 2: </td>
			<td><input name="txtOperand2" type="text" value="<?php echo$operand2;?>" /></td>
		</tr>
		<tr>
			<td>Output from a summation: </td>
			<td><input name="txtTong" type="text" readonly="readonly" value="<?php echo$summation?>" /></td> 
		</tr>
		<tr>
			<td>Output from a subtraction: </td>
			<td><input name="txtHieu" type="text" readonly="readonly" value="<?php echo$subtraction?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Submit"</td>
		</tr>
		</table>
	</form>
</body>
</html>

