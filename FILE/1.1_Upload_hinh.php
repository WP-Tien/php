<?php
if($_POST["upload"])
{
	if($_FILES["upload_hinh"]["error"] > 0)
	{
		echo "Hình bị lỗi!";
	}
	else
	{
		$mang_ten_hinh = explode(".",$_FILES["upload_hinh"]["name"]);
		if($mang_ten_hinh[count($mang_ten_hinh) - 1] == "jpg" || $mang_ten_hinh[count($mang_ten_hinh) - 1] == "png" || $mang_ten_hinh[count($mang_ten_hinh) - 1] == "gif")
		{
			$hinh_luu_tai_vi_tri = "images/".$_FILES["upload_hinh"]["name"];
			move_uploaded_file($_FILES["upload_hinh"]["tmp_name"], $hinh_luu_tai_vi_tri);
		}
	}
}
?>

<meta charset="utf-8" />
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="upload_hinh" /><input type="submit" name="upload" value="Upload" />
	<?php
	if($hinh_luu_tai_vi_tri)
	{
		?>
		<img src="<?php echo $hinh_luu_tai_vi_tri; ?>" />
		<?php
	}
	?>
</form>