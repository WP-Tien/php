<?php
$mang_kich_thuoc = array(50,100,150,200);

//print_r($_POST);

?>
<meta charset="utf-8" />
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Xem thư mục hình</td>
		</tr>
		<tr>
			<td>Chọn thư mục:</td>
			<td>
				<?php
				$dir = opendir(".");
				?>
				<select name="chon_thu_muc">
					<?php
					while(($folder = readdir($dir)) != false)
					{
						if($folder != "." && $folder != ".." && is_dir($folder))
						{
						?>
						<option><?php echo $folder; ?></option>
						<?php
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Chọn kích thước:</td>
			<td>
				<select name="kich_thuoc">
					<?php
					foreach($mang_kich_thuoc as $kich_thuoc)
					{
						?>
						<option><?php echo $kich_thuoc; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="xem_hinh_anh" value="Xem Hình Ảnh" /></td>
		</tr>
	</table>
</form>

<div class="ds_hinh_anh">
	<?php
	if($_POST)
	{
		//mở thư mục hình được chọn
		$dir_hinh = opendir($_POST["chon_thu_muc"]);
		
		while(($file = readdir($dir_hinh)) !== false)
		{
			if(is_file($_POST["chon_thu_muc"]."/".$file))// nếu như thành phần là tập tin
			{
				//echo $file."<br/>";
				$mang_ten_file = explode(".",$file);
				if($mang_ten_file[count($mang_ten_file) - 1] == "png" || $mang_ten_file[count($mang_ten_file) - 1] == "jpg" || $mang_ten_file[count($mang_ten_file) - 1] == "gif")
				{
					?>
					<img style="width: <?php echo $_POST['kich_thuoc']; ?>px;" src="<?php echo $_POST["chon_thu_muc"].'/'.$file; ?>" />
					<?php
				}
			}
		}
	}
	?>
</div>