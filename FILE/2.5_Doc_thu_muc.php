<meta charset="utf-8" />
<?php

?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2">
				Đọc thư mục
			</td>
		</tr>
		<tr>
			<td>Chọn thư mục:</td>
			<td>
				<select name="chon_thu_muc">
					<?php
					$dir = opendir(".");
					while(($folder = readdir($dir)) !== false)
					{
						if(is_dir($folder) && $folder != "." && $folder != "..")
						{
							?>
							<option><?php echo $folder; ?></option>
							<?php
						}
					}
					closedir($dir);
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Đọc thư mục" />
			</td>
		</tr>
	</table>
</form>

<?php
if($_POST)
{
	$dir = opendir($_POST["chon_thu_muc"]);
	while(($file = readdir($dir)) !== false)
	{
		if(is_file($_POST["chon_thu_muc"]."/".$file))
		{
			echo "<img src='images/file.jpg' />".$file . "<br/>";
		}
		else if($file != "." && $file != "..")
		{
			echo "<img src='images/folder.jpg' />".$file . "<br/>";
		}
	}
}

?>