<meta charset="utf-8" />
<style>
	.thong_tin_mon_an{
		float: left;
		border: 1px solid #f0f;
		margin: 20px;
	}
	.thong_tin_mon_an div{
		text-align: center;
	}
</style>
<div><a href="2.9_Them_mon_an.php">Thêm món ăn mới</a></div>
<?php
$mang_loai_mon = array('0'=>"Nướng",'1'=>"Chiên",'2'=>"Xào",'3'=>"Nấu",'4'=>"Hấp");
//lấy danh sách mon_an
$noi_dung_file_mon_an = file_get_contents("files/mon_an.txt");
$mang_mon_an = explode("/*",$noi_dung_file_mon_an);
//print_r($mang_mon_an);
unset($mang_mon_an[0]);

?>
<div style="float:left">
<?php
foreach($mang_loai_mon as $key=>$loai_mon)
{
	?>
	<a href="2.9.1_Danh_sach_mon_an.php?loai_mon=<?php echo $key; ?>"><?php echo $loai_mon; ?></a><br/>
	<?php
}
?>
</div>
<?php
if( isset($_GET["loai_mon"]) )
{
	$loai_mon = $_GET["loai_mon"];
}
else
{
	$loai_mon = 0;
}

foreach($mang_mon_an as $mon_an)
{
	$tt_mon_an = explode("|",$mon_an);
	if($tt_mon_an[1] == $loai_mon)
	{
	?>
	<div class="thong_tin_mon_an">
		<div><?php echo $tt_mon_an[0]; ?></div>
		<div><?php echo $tt_mon_an[2]; ?></div>
		<div><img src="images/<?php echo $tt_mon_an[3]; ?>" style="width: 200px; height: 200px;" /></div>
	</div>
	<?php
	}
}
?>