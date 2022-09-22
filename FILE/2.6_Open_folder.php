<meta charset="utf-8" />
<?php
// lấy đường dẫn
if( isset($_GET["thu_muc"]) )
{
	$duong_dan = "./".$_GET["thu_muc"]."/";
}
else
{
	$duong_dan = "./"; // on this file dir 
}

// mở thư mục
$dir = opendir($duong_dan);

// đọc từng thành phần có trong thư mục
while(($file = readdir($dir)) !== false)
{
	if($file != "." && $file != "..")// thành phần phải khác . và .. vì . là chính nó, .. là parent cha
	{
		if(is_file($duong_dan.$file))// nếu như thành phần là tập tin
		{
			?>
			<img style="width: 30px;" src="images/file.jpg" /><?php echo $file; ?><br/>
			<?php
		}
		else// lúc này thành phần là thư mục
		{
			?>
			<a href="2.6_Open_folder.php?thu_muc=<?php echo $file; ?>"><img style="width: 30px;" src="images/folder.jpg" /><?php echo $file; ?></a><br/>
			<?php
		}
	}
}

if( isset($_GET["thu_muc"]) )// xuất hiện link quay về thư mục gốc
{
	?>
	<a href="2.6_Open_folder.php">Quay về thư mục gốc</a>
	<?php
}
?>