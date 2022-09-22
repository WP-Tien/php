<meta charset="utf-8" />
<?php
	$noi_dung_file = "";
	
	if($_POST)
	{
		$file = fopen($_POST["duong_dan_file"],"w") or exit ("Không mở được file!");
		fwrite($file,$_POST["noi_dung"]);
		fclose($file);
		
		$file = fopen($_POST["duong_dan_file"],"r") or exit ("Không mở được file!");
		while(!feof($file))
		{
			$noi_dung_file .= fgets($file) . "<br/>";
		}
		fclose($file);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Ghi và Đọc file
			</td>
		</tr>
		<tr>
			<td>Đường dẫn</td>
			<td><input type="text" name="duong_dan_file" /></td>
		</tr>
		<tr>
			<td>Nội dung:</td>
			<td><textarea name="noi_dung"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Đọc và Ghi file" />
			</td>
		</tr>
	</table>
</form>
<?php
if($noi_dung_file)
{
?>
<div>Kết quả</div>
<div><?php echo $noi_dung_file; ?></div>
<?php
}
?>