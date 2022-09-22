<meta charset="utf-8" />
<?php
$mang_loai_mon = array('0'=>"Nướng",'1'=>"Chiên",'2'=>"Xào",'3'=>"Nấu",'4'=>"Hấp");
if($_POST)
{
	// nhan bien tu post
	$ten_mon_an = $_POST["ten_mon_an"];
	$loai_mon_an = $_POST["loai_mon_an"];
	$cach_che_bien = $_POST["cach_che_bien"];
	
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
	$chuoi_luu_mon_an = "/*".$ten_mon_an."|".$loai_mon_an."|".$cach_che_bien."|".$_FILES["hinh_upload"]["name"];
	//echo $chuoi_luu_mon_an;
	
	// luu thông hoa moi vào file
	$noi_dung = file_get_contents("files/mon_an.txt");
	file_put_contents("files/mon_an.txt",$noi_dung . $chuoi_luu_mon_an);
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">Thêm món ăn</td>
		</tr>
		<tr>
			<td>Tên món ăn:</td>
			<td>
				<input type="text" name="ten_mon_an" />
			</td>
		</tr>
		<tr>
			<td>Loại món:</td>
			<td>
				<select name="loai_mon_an">
					<?php
					foreach($mang_loai_mon as $key=>$loai_mon)
					{
						?>
						<option value="<?php echo $key ?>"><?php echo $loai_mon; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Cách chế biến:</td>
			<td>
				<textarea name="cach_che_bien"></textarea>
			</td>
		</tr>
		<tr>
			<td>Hình bó hoa:</td>
			<td>
				<input type="file" name="hinh_upload" />
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="them_mon_an" value="Thêm món ăn" /></td>
		</tr>
	</table>
</form>

<a href="2.9.1_Danh_sach_mon_an.php">Xem danh sách món ăn</a>