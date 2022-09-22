<meta charset="utf-8" />
<?php
class image{
	public $tieu_de, $duong_dan, $ghi_chu, $chieu_cao, $chieu_rong, $duong_vien, $canh_le;
	
	function __construct($tieu_de, $duong_dan, $ghi_chu, $chieu_cao, $chieu_rong, $duong_vien, $canh_le)
	{
		$this->tieu_de = $tieu_de;
		$this->duong_dan = $duong_dan;
		$this->ghi_chu = $ghi_chu;
		$this->chieu_cao = $chieu_cao;
		$this->chieu_rong = $chieu_rong;
		$this->duong_vien = $duong_vien;
		$this->canh_le = $canh_le;
	}
	
	function hien_thi_hinh_anh()
	{
		?>
		<div>
			<div><?php echo $this->tieu_de; ?></div>
			<div style="text-align: <?php echo $this->canh_le; ?>">
				<img style="width: <?php echo $this->chieu_rong; ?>px; height: <?php echo $this->chieu_cao; ?>px;border: <?php echo $this->duong_vien ?>px solid #000" src="<?php echo $this->duong_dan; ?>" title="<?php echo $this->ghi_chu; ?>" />
			</div>
		</div>
		<?php
	}
}

if(isset($_POST["submit"]))
{
	$hinh_anh = new image($_POST["tieu_de"], $_POST["duong_dan"], $_POST["ghi_chu"], $_POST["chieu_cao"], $_POST["chieu_rong"], $_POST["duong_vien"], $_POST["canh_le"]);
}
?>

<form action="" method="post">
	<table>
		<tr>
			<td colspan="4">Hiển thị hình ảnh</td>
		</tr>
		<tr>
			<td>Tiêu đề</td>
			<td colspan="3"><input type="text" name="tieu_de" /></td>
		</tr>
		<tr>
			<td>Đường dẫn hình</td>
			<td colspan="3"><input type="text" name="duong_dan" /></td>
		</tr>
		<tr>
			<td>Dòng ghi chú: </td>
			<td colspan="3"><input type="text" name="ghi_chu" /></td>
		</tr>
		<tr>
			<td>Chiều rộng:</td>
			<td><input type="text" name="chieu_rong" /></td>
			<td>Chiều cao:</td>
			<td><input type="text" name="chieu_cao" /></td>
		</tr>
		<tr>
			<td>Đường viền:</td>
			<td><input type="text" name="duong_vien" /></td>
			<td>Canh lề:</td>
			<td>
				<select name="canh_le">
					<option>left</option>
					<option>right</option>
					<option>center</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<button type="submit" name="submit">Hiển thị</button>
			</td>
		</tr>
	</table>
</form>

<?php
if(isset($hinh_anh))
{
	$hinh_anh->hien_thi_hinh_anh();
}
?>