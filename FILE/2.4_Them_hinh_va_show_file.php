<meta charset="utf-8" />
<?php
	if( isset($_FILES["file_upload"]) && $_FILES["file_upload"]["error"] > 0)
	{
		echo "File bị lỗi rồi";
	}
	else
	{
		if( isset( $_FILES["file_upload"]) ) {
			$mang_file = explode(".", $_FILES["file_upload"]["name"]);
			if($mang_file[count($mang_file) - 1] == "png" || $mang_file[count($mang_file) - 1] == "jpg" || $mang_file[count($mang_file) - 1] == "gif")
			{
				move_uploaded_file($_FILES["file_upload"]["tmp_name"], "uploads/".$_FILES["file_upload"]["name"]);
			}
		}

	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">
				Upload hình
			</td>
		</tr>
		<tr>
			<td>Chọn file:</td>
			<td>
				<input type="file" name="file_upload" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Upload" />
			</td>
		</tr>
	</table>
</form>

<?php
$dir = opendir("uploads");

while(($file = readdir($dir)) !== false)
{
	if(is_file("uploads/".$file))
	{
		echo $file . "<br/>";
	}
}
?>