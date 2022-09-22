<meta charset="utf-8" />
<style>
	.thong_tin_hoa{
		float: left;
		border: 1px solid #f0f;
		margin: 20px;
	}
	.thong_tin_hoa div{
		text-align: center;
	}
</style>
<div><a href="2.8_Them_boa_hoa.php">Thêm bó hoa mới</a></div>
<?php
//lấy danh sách hoa
$noi_dung_file_hoa = file_get_contents("files/hoa.txt");
$mang_hoa = explode("/*",$noi_dung_file_hoa);
//print_r($mang_hoa);
unset($mang_hoa[0]);

foreach($mang_hoa as $hoa)
{
	$tt_hoa = explode("|",$hoa);
	?>
	<div class="thong_tin_hoa">
		<div><?php echo $tt_hoa[0]; ?></div>
		<div><?php echo number_format($tt_hoa[1],0,",","."); ?> VNĐ</div>
		<div><img src="images/<?php echo $tt_hoa[2]; ?>" style="width: 200px; height: 200px;" /></div>
	</div>
	<?php
}
?>