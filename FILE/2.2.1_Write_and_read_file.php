<meta charset="utf-8" />
<?php
	$path = "folder";
	$noi_dung_file = "";

	if($_POST)
	{
		$file = fopen($path . "/" .$_POST['chon_file'],"a") or exit ("Không mở được file!");
		fwrite($file,$_POST["noi_dung"]);
		fclose($file);
		
		$file = fopen($path . "/" .$_POST['chon_file'],"r") or exit ("Không mở được file!");
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
				Thêm Nội Dung Vào File
			</td>
		</tr>
		<tr>
			<td>Chọn file:</td>
			<td>
				<select name="chon_file">
					<?php
					$dir = opendir($path);
					while(($item = readdir($dir)) !== false)
					{
						if(is_file($path."/".$item))
						{
							?>

							<option <?php echo ( isset($_POST["chon_file"]) ) ? "selected" : ""; ?> value="<?php echo $item; ?>">
								<?php echo $item; ?>
							</option>

							<?php
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nội dung:</td>
			<td><textarea name="noi_dung"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Ghi thêm vào" />
			</td>
		</tr>
	</table>
</form>


<?php
if(isset($noi_dung_file))
{
?>
<div>Kết quả</div>
<div><?php echo $noi_dung_file; ?></div>
<?php
}
?>