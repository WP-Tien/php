<meta charset="utf-8" />
<?php
$file = fopen("files/test.docx","r") or exit("Không thể mở được file!");

//fwrite($file,"Hahaha bị đè rồi");
while(!feof($file))
{
	echo fgets($file);
}

fclose($file);

/*while(!feof($file))
{
	echo fgetc($file);
}*/
//$chuoi = readfile("files/test.txt");

//$chuoi = file_get_contents("files/test.txt");
//echo str_replace("\n","<br/>",$chuoi);
?>