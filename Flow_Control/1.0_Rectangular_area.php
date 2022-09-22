<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Area of a rectangle </title>
	</head>
	<?php 
		$length = 0;
		$width = 0;
		$result = 0;
		$caution = '';
		$flag = true;

		if( isset($_POST["submit"]) ){

			$length = $_POST["txtLength"];
			$width = $_POST["txtWidth"];

			/** Some validation */
			if ($length == 0 || empty($length) ){
				$caution = "The length is empty";
				$flag = false;
			}
			if ($length < 0) {
				$caution .= " The length can't be negative";
				$flag =  false;
			}

			if ($width == 0 || empty($width) ){
				$caution .= " The width is empty";
				$flag = false;
			}
			if ($width < 0) {
				$caution .= " The width can't be negative";
				$flag =  false;
			}

			if ($flag){
				$result = $length * $width ;
				$caution = "Excuted";
			}
		}
	?>
	<body>
		<form method="post" action="">
			<table width="500" border="0" align="center">
				<tr>
					<caption> Area of a rectangle </caption>
					<td colspan="2" align="center"><?php echo ( $caution ) ? "<p style='color:red;'>$caution</p>" : "NHT"; ?></td>
				</tr>
				<tr>
					<td>Input your length: </td>
					<td><input name="txtLength" type="text" value="<?php echo $length;?>" /></td>
				</tr>
				<tr>
					<td>Input your width: </td>
					<td><input name="txtWidth" type="text" value="<?php echo $width;?>" /></td>
				</tr>
				<tr>
					<td>Result: </td>
					<td><input name="txtResult" type="text" readonly="readonly" value="<?php echo $result;?>"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Submit" /></td> 
				</tr>
				
			</table>
		</form>
	</body>
</html>
