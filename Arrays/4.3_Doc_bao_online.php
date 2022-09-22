<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
<?php
	$mang_bao = array(
		array("Tuổi trẻ","tuoitre.com.vn"),
		array("Thanh niên","thanhnien.com.vn"),
		array("Báo điện tử VNEXPRESS","vnexpress.net")
	);
?>	
	<form action="" method="get">
		<table>
			<tr>
				<td>
					Đọc báo online
				</td>
			</tr>
			<tr>
				<td>
					Chọn báo: 
					<select name="bao">
						<?php
						foreach($mang_bao as $key=>$bao)
						{
						?>
							<option <?php if( isset($_GET["bao"]) && $_GET["bao"] == $key ) echo "selected"; ?> value="<?php echo $key; ?>">
								<?php echo $bao[0]; ?>
							</option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" value="Đăng ký tour" />
				</td>
			</tr>

			<tr>
				<td>
					<?php
						if($_GET)
						{
							?>
							<a target="_blank" href="http://<?php echo $mang_bao[$_GET["bao"]][1]; ?>"><?php echo $mang_bao[$_GET["bao"]][1]; ?></a>
							<?php
						}
					?>
				</td>
			</tr>
		</table>
	</form>
	<div>
		
	</div>
</body>
</html>