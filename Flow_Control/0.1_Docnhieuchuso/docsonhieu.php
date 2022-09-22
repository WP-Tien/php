<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("ham.php");

$so = null;
if ($_POST) {
	$so=$_POST["txtso"];
}

/*
if (strlen($so)<=3)
{
	$chuso=docbaso($so);
}
else if (strlen($so) >3 && strlen($so) <=6 )
{
	$ngan=(int)$so/1000;
	$tram=$so%1000;
	$chuso = docbaso($ngan) ." Ngàn " . docbaso($tram);  
}
else if (strlen($so) >6 && strlen($so) <=9 )
{
	$trieu = (int)$so/1000000;
	$ngan=(int)$so/1000;
	$tram=$so%1000;
	$chuso = docbaso($trieu) . " Triệu " . docbaso($ngan) ." Ngàn " . docbaso($tram);  
}
*/

$chuso = doiso($so);

?>
<body>
<form id="form1" name="form1" method="post" action="">
  <input type="text" name="txtso" id="txtso" value="<?php echo $so ?>" />
  <input type="submit" name="btndocso" id="btndocso" value="Đọc số" />
</form>
<p><?php echo $chuso ?> 
</body>
</html>