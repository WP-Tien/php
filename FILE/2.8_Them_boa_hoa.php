<meta charset="utf-8" />
<?php
$ten_bo_hoa = "";
$gia_ban = "";

if($_POST)
{
	// nhan bien tu post
	$ten_bo_hoa = $_POST["ten_bo_hoa"];
	$gia_ban = $_POST["gia_ban"];
	
	// upload hinh
	if($_FILES["hinh_upload"]["error"] > 0)
	{
		echo "<script>alert('File bị lỗi')</script>";
	}
	else
	{
		$mang_ten_file = explode(".",$_FILES["hinh_upload"]["name"]);
		if($mang_ten_file[count($mang_ten_file) - 1] == "png" || $mang_ten_file[count($mang_ten_file) - 1] == "jpg" || $mang_ten_file[count($mang_ten_file) - 1] == "gif")
		{
			move_uploaded_file($_FILES["hinh_upload"]["tmp_name"],"images/".$_FILES["hinh_upload"]["name"]);
		}
	}
	
	// tao chuoi luu thong tin hoa
	$chuoi_luu_hoa = "/*".$ten_bo_hoa."|".$gia_ban."|".$_FILES["hinh_upload"]["name"];
	//echo $chuoi_luu_hoa;
	
	// luu thông hoa moi vào file
	$noi_dung = file_get_contents("files/hoa.txt");
	file_put_contents("files/hoa.txt",$noi_dung . $chuoi_luu_hoa);
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">Thêm bó hoa</td>
		</tr>
		<tr>
			<td>Tên bó hoa:</td>
			<td>
				<input type="text" name="ten_bo_hoa" />
			</td>
		</tr>
		<tr>
			<td>Giá bán:</td>
			<td>
				<input type="text" name="gia_ban" />
			</td>
		</tr>
		<tr>
			<td>Hình bó hoa:</td>
			<td>
				<input type="file" name="hinh_upload" />
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="xem_hinh_anh" value="Thêm bó hoa" /></td>
		</tr>
	</table>
</form>

<div>
	<?php echo $ten_bo_hoa . " - " . $gia_ban; ?>
	<?php
		if( isset($_FILES["hinh_upload"]["name"]) )
		{
			?>
				<img src="bo_hoa/<?php echo $_FILES["hinh_upload"]["name"]; ?>" />
			<?php
		}
	?>
</div>

<a href="2.8.1_Danh_sach_boa_hoa.php">Xem bó hoa</a>