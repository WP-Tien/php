<?php
	class table{
		public $so_dong, $so_cot, $do_rong, $do_day_duong_vien, $khoang_cach_o, $khoang_cach_dong, $noi_dung, $vi_tri_cot_dinh_dang, $vi_tri_dong_dinh_dang, $mau_nen;
		
		function table($so_dong, $so_cot, $do_rong, $do_day_duong_vien, $khoang_cach_o, $khoang_cach_dong, $noi_dung, $vi_tri_cot_dinh_dang, $vi_tri_dong_dinh_dang, $mau_nen){
			$this->so_dong = $so_dong;
			$this->so_cot = $so_cot;
			$this->do_rong = $do_rong;
			$this->do_day_duong_vien = $do_day_duong_vien;
			$this->khoang_cach_o = $khoang_cach_o;
			$this->khoang_cach_dong = $khoang_cach_dong;
			$this->noi_dung = $noi_dung;
			$this->vi_tri_cot_dinh_dang = $vi_tri_cot_dinh_dang;
			$this->vi_tri_dong_dinh_dang = $vi_tri_dong_dinh_dang;
			$this->mau_nen = $mau_nen;
		}
		
		function in_bang()
		{
			?>
			<table style="width: <?php echo $this->do_rong; ?>px; " border="<?php echo $this->do_day_duong_vien; ?>" cellspacing="<?php echo $this->khoang_cach_dong; ?>" cellpadding="<?php echo $this->khoang_cach_o; ?>">
			<?php
			for($i=1; $i<= $this->so_dong; $i++)
			{
				?>
				<tr>
				<?php
					for($j=1; $j <= $this->so_cot; $j++)
					{
						if($i == $this->vi_tri_dong_dinh_dang && $j == $this->vi_tri_cot_dinh_dang)
						{
							?>
							<td style="background: <?php echo $this->mau_nen; ?>;">
							<?php echo $this->noi_dung; ?>
							</td>
							<?php
						}
						else
						{
							?>
							<td>&nbsp;</td>
							<?php
						}
					}
				?>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
		}
	}
?>

<meta charset="utf-8" />
<form action="" method="post">
	<table>
		<tr>
			<td colspan="4">
				Vẽ Bảng
			</td>
		</tr>
		<tr>
			<td>Số dòng:</td>
			<td><input type="text" name="so_dong" value="" /></td>
			<td>Số cột:</td>
			<td><input type="text" name="so_cot" value="" /></td>
		</tr>
		<tr>
			<td></td>
			<td>Độ rộng:</td>
			<td><input type="text" name="do_rong" value="" /></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td>Độ dày đường viền:</td>
			<td><input type="text" name="do_day_duong_vien" value="" /></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td>Khoảng cách ô:</td>
			<td><input type="text" name="khoang_cach_o" value="" /></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td>Khoảng cách dòng:</td>
			<td><input type="text" name="khoang_cach_dong" value="" /></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td>Nội dung:</td>
			<td><input type="text" name="noi_dung" value="" /></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="4" style="text-align: center;">
				Số dòng: <input type="text" name="vi_tri_dong_dinh_dang" />;
				Số cột: <input type="text" name="vi_tri_cot_dinh_dang" />;
				Màu nền <input type="color" name="mau_nen" />
			</td>
		</tr>
		<tr>
			<td colspan="4" style="text-align: center;">
				<input type="submit" name="nut" value="In bảng" />
			</td>
		</tr>
	</table>
</form>

<?php 
	if($_POST)
	{
		$bang = new table($_POST["so_dong"], $_POST["so_cot"], $_POST["do_rong"], $_POST["do_day_duong_vien"], $_POST["khoang_cach_o"], $_POST["khoang_cach_dong"], $_POST["noi_dung"], $_POST["vi_tri_cot_dinh_dang"], $_POST["vi_tri_dong_dinh_dang"], $_POST["mau_nen"]);
		$bang->in_bang();
	}
?>