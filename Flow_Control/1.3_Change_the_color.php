<meta charset="utf-8" />

<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Định màu chữ - màu nền</td>
		</tr>
		<tr>
			<td>Nội dung:</td>
			<td><input type="text" name="noi_dung" value="<?php if(isset($_POST['noi_dung']))
			{ echo $_POST['noi_dung'];} ?>" /></td>
		</tr>
		<tr>
			<td>Màu nền:</td>
			<td><input type="color" name="mau_nen" value="<?php echo $_POST['mau_nen'] ?>" /></td>
		</tr>
		<tr>
			<td>Màu chữ:</td>
			<td><input type="color" name="mau_chu" value="<?php echo $_POST['mau_chu'] ?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Xem kết quả" /></td>
		</tr>
	</table>
	<?php
	$noi_dung  = '';
	$mau_nen = '';
	$mau_chu = '';
	if($_POST)
	{
		$noi_dung = $_POST["noi_dung"];
		$mau_nen = $_POST["mau_nen"];
		$mau_chu = $_POST["mau_chu"];
		?>
		<div style="color: <?php echo $mau_chu; ?>; background: <?php echo $mau_nen; ?>">
			<?php echo $noi_dung; ?>
		</div>
		<?php
	}
	?>
	
</form>