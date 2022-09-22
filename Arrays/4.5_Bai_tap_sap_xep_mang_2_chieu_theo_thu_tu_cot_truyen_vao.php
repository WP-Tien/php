<meta charset="utf-8" />
<style>
	.mang_phat_sinh, .mang_sap_xep{
		padding: 10px;
		border: 1px solid #00f;
		position: absolute;
		top: 200px;
		text-align: center;
	}
	.mang_phat_sinh{
		left: 30%;
	}
	.mang_sap_xep{
		right: 30%;
	}
	.title_ket_qua{
		background: #00f;
		padding: 10px;
		margin: 0 0 10px 0;
		font-weight: bold;
		color: #fff;
	}
</style>
<?php
	function array_orderby()
	{
		$args = func_get_args();
		echo "<pre>",print_r($args),"</pre>";

		$data = array_shift($args);
		echo "<pre>",print_r($data),"</pre>";

		foreach ($args as $n => $field) {
			if (is_string($field)) {

				$tmp = array();
				
				foreach ($data as $key => $row)
					$tmp[$key] = $row[$field];
				$args[$n] = $tmp;

			}
		}
		
		//echo "<pre>",print_r($args),"</pre>";
		$args[] = &$data;
		
		//echo "<pre>",print_r($args),"</pre>";
		call_user_func_array('array_multisort', $args);
		//echo "<pre>",print_r($args),"</pre>";
		return array_pop($args);
	}

	if($_POST)
	{
		$gia_tri_min = $_POST["gia_tri_min"];
		$gia_tri_max = $_POST["gia_tri_max"];
		$so_phan_tu_mang = $_POST["so_phan_tu_mang"];
		$mang_phat_sinh = array();

		for($i = 0; $i < $so_phan_tu_mang; $i++)
		{
			$mang_phat_sinh[] = array("id"=>rand($gia_tri_min, $gia_tri_max),"time"=>rand($gia_tri_min, $gia_tri_max),"uid"=>rand($gia_tri_min, $gia_tri_max));
		}
		
		$mang_sap_xep = array_orderby($mang_phat_sinh, 'id', 'time', 'uid');
		//echo "<pre>",print_r($mang_phat_sinh),"</pre>";
	}
?>
<form action="" method="post">
	<table align="center" border="1" cellpadding="4" cellspacing="0" bordercolor="#6BD8FF;" style="border-collapse: collapse;">
		<tr>
			<td colspan="2" style="font-size: 20px; font-weight: bold; color: #F00; text-align: center; background: #6BD8FF;">Sắp xếp mảng 2 chiều theo thứ tự từ khóa</td>
		</tr>
		<tr>
			<td>Số phần tử mảng</td>
			<td><input type="text" name="so_phan_tu_mang" value="" /></td>
		</tr>
		<tr>
			<td>Giá trị nhỏ nhất trong các phần tử</td>
			<td><input type="text" name="gia_tri_min" value="" /></td>
		</tr>
		<tr>
			<td>Giá trị lớn nhất trong các phần tử</td>
			<td><input type="text" name="gia_tri_max" value="" /></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" value="Sắp xếp mảng" /></td>
		</tr>
	</table>
</form>

<?php
if($_POST)
{
?>
<div class="mang_phat_sinh">
	<div class="title_ket_qua">Mảng được phát sinh ra</div>
	<?php
	foreach($mang_phat_sinh as $item)
	{
	?>
	<div>
		<b>ID</b>: <?php echo $item["id"] ?> | <b>time</b>: <?php echo $item["time"] ?> | <b>uid</b>: <?php echo $item["uid"] ?>
	</div>
	<?php
	}
	?>
</div>
<div class="mang_sap_xep">
	<div class="title_ket_qua">Mảng phát sinh sau khi sắp xếp</div>
	<?php
	foreach($mang_sap_xep as $item)
	{
	?>
	<div>
		<b>ID</b>: <?php echo $item["id"] ?> | <b>time</b>: <?php echo $item["time"] ?> | <b>uid</b>: <?php echo $item["uid"] ?>
	</div>
	<?php
	}
	?>
</div>
<?php
}
?>