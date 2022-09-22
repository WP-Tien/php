<meta charset="utf-8" />
<?php
function vi_tri_chuoi($chuoi, $tu_tim_kiem)
{
	$ket_qua = strpos($chuoi, $tu_tim_kiem);
		
	if($ket_qua !== false)
	{
		$ket_qua = "Tìm thấy chuỗi ở vị trí: " . ($ket_qua+1);
		$ket_qua .= "; kết quả được tô màu: " . str_replace($tu_tim_kiem,"<span style='color: red; background: blue'>$tu_tim_kiem</span>", $chuoi); 
	}
	else
	{
		$ket_qua = "Không tìm thấy chuỗi";
	}
	
	return $ket_qua;
}

	if($_POST)
	{
		$chuoi = $_POST["chuoi"];
		$tu_tim_kiem = $_POST["tu_tim_kiem"];
		
		$ket_qua = vi_tri_chuoi($chuoi, $tu_tim_kiem);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Thay thế từ trong chuỗi</td>
		</tr>
		<tr>
			<td>Chuỗi</td>
			<td><input type="text" name="chuoi" /></td>
		</tr>
		<tr>
			<td>Từ tìm kiếm</td>
			<td><input type="text" name="tu_tim_kiem" /></td>
		</tr>
		<tr>
			<td>Kết quả</td>
			<td><?php echo (isset($ket_qua)) ? "$ket_qua" : ""; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Hiển thị" />
			</td>
		</tr>
	</table>
</form>