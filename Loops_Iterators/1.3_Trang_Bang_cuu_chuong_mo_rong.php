<html>
	<html>
		<title> Bảng cửu chương mở rộng </title>
		<meta charset="UTF-8">
	</html>

	<body>
		<?php 
		$bd = 0;
		$kt = 0;
		if(isset($_POST["bd"]) && isset($_POST["kt"]))
		{

			$bd = $_POST["bd"];
			$kt = $_POST["kt"];
			
			for($i=$bd;$i <= $kt; $i++)
			{	
				echo "<div style='float:left'>";
				echo "<table border='1'>";
				for($j=1;$j<=10;$j++)
				{
				echo "<tr>";
				echo "<td>";
					echo "$i x $j = ". $i*$j . "<br>";
				echo "</td>";
				echo "</tr>";
				}
			echo "</table>";
			echo "</div>";
			}	


		}
			
	?>
			<form action="" method="post">
			<table>
				<tr>
					<th colspan="2"> Bảng cửu chương mở rộng </th>
				</tr>
				<tr>
					<td> Bắt đầu từ </td>
					<td> <input name="bd" type="text" value="<?php echo $bd;?>" /> </td>					
				</tr>
				<tr>
					<td> Kết thúc tại </td>
					<td> <input name="kt"  type="text" value="<?php echo $kt;?>" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" value="In bảng cửu chương" /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>