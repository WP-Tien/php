<meta charset="utf-8" />
<?php
	if($_POST)
	{
		$ten_file = $_POST["ten_file"];
		$noi_dung = file_get_contents($ten_file);
		$san_pham = $_POST["ten_hang"] . "\t" . $_POST["so_luong"] . "\t" . $_POST["don_gia"] . "\t" . ($_POST["so_luong"] * $_POST["don_gia"]);
		file_put_contents($ten_file, $noi_dung."\n".$san_pham);
	}
?>

<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Thêm sản phẩm
			</td>
		</tr>
		<tr>
			<td>Tên file:</td>
			<td>
				<input type="text" name="ten_file" />
			</td>
		</tr>
		<tr>
			<td>Tên hàng:</td>
			<td>
				<input type="text" name="ten_hang" />
			</td>
		</tr>
		<tr>
			<td>Số lượng:</td>
			<td>
				<input type="text" name="so_luong" />
			</td>
		</tr>
		<tr>
			<td>Đơn giá:</td>
			<td>
				<input type="text" name="don_gia" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Ghi và đọc file" />
			</td>
		</tr>
	</table>
</form>


<?php
if($_POST)
{
	?>
	<table>
		<tr>
			<td>Tên hàng</td>
			<td>Số lượng</td>
			<td>Đơn giá</td>
			<td>Thành tiền</td>
		</tr>
	<?php
	$noi_dung = file_get_contents($ten_file);
	var_dump($noi_dung);
	$ds_san_pham = explode("\n",$noi_dung);
	foreach($ds_san_pham as $san_pham)
	{
		if($san_pham)
		{
			$tt_san_pham = explode("\t",$san_pham);
			?>
			<tr>
				<td><?php echo $tt_san_pham[0]; ?></td>
				<td><?php echo $tt_san_pham[1]; ?></td>
				<td><?php echo $tt_san_pham[2]; ?></td>
				<td><?php echo $tt_san_pham[3]; ?></td>
			</tr>
			<?php
		}
	}
	?>
	</table>
	<?php
}
?>