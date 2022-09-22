<?php
	$chon_thang = 0;
	$chon_nam = 0;
	if($_POST){
		$chon_thang = $_POST["chon_thang"];
		$chon_nam = $_POST["chon_nam"];
	}
?>

<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
		.chu_nhat{
			border-color: #f00!important;
			color: #f00;
		}
		.thu_bay{
			border-color: #00f!important;
			color: #00f;
		}
	</style>
</head>
<body>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
		<form action="" method="POST" role="form">
			<legend>In lịch</legend>
		
			<div class="form-group">
				<label for="">Chọn tháng</label>
				<select name="chon_thang" id="inputChon_thang" class="form-control" required="required">
					<?php
					for($i = 1; $i <= 12; $i++)
					{
					?>
					<option><?php echo $i; ?></option>
					<?php
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Chọn tháng</label>
				<select name="chon_nam" id="inputChon_thang" class="form-control" required="required">
					<?php
					for($i = date("Y") - 3; $i <= date("Y") + 3; $i++)
					{
					?>
						<option><?php echo $i; ?></option>
					<?php
					}
					?>
				</select>
			</div>
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php
		if($_POST)
		{
			$thu_ngay_dau_thang = date("w",mktime(0,0,0,$chon_thang,1,$chon_nam));
			$ngay_in = 1;
			$so_ngay_trong_thang = date("t",mktime(0,0,0,$chon_thang,1,$chon_nam));
			?>
			<table class="table table-hover">
				<tr>
					<td>Sun</td>
					<td>Mon</td>
					<td>Tue</td>
					<td>Wed</td>
					<td>Thu</td>
					<td>Fri</td>
					<td>Sat</td>
				</tr>
			<?php
			for($i = 0; $i < 42; $i++)
			{
				if($i % 7 == 0)
				{
				?>
					<tr>
				<?php
				}

				if(($i == $thu_ngay_dau_thang || $ngay_in > 1) && $ngay_in <= $so_ngay_trong_thang )
				{
					?>
					<td class="<?php if($i % 7 == 0) echo 'chu_nhat'; else if($i % 7 == 6) echo 'thu_bay' ?>"><?php echo $ngay_in; $ngay_in++; ?></td>
					<?php
				}
				else
				{
					?>
					<td>&nbsp;</td>
					<?php
				}

				if($i % 7 == 6)
				{
				?>
					</tr>
				<?php
				}
				
			}
			?>
		</table>
			<?php
		}
		?>
	</div>
</body>
</html>