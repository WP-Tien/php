<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>Change the font color, background color</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php 

$noidung = '';
$mauchu = '';
$maunen = '';

if($_POST){
  $noidung = $_POST["noi_dung"];
  $mauchu = $_POST["mau_chu"];
  $maunen = $_POST["mau_nen"];
}

?>

<body>
<form name="form1" method="post" action="">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCCCC">
    <tr bgcolor="#880000">
      <td colspan="2" bgcolor="#DD4800"><div align="center" class="style1 style3">ĐỊNH M&Agrave;U CHỮ - M&Agrave;U NỀN</div></td>
    </tr>
    <tr>
      <td><span class="style11">&nbsp;Nội dung: </span></td>
      <td><span class="style9">
        <label>
        <input name="noi_dung" type="text" id="noi_dung" size="40" value="<?php echo $noidung ?>">
        </label>
      </span></td>
    </tr>
    <tr>
      <td width="100"><span class="style11">&nbsp;M&agrave;u chữ:</span></td>
      <td width="300"><input name="mau_chu" type="text" id="mau_chu" value="<?php echo $mauchu ?>" size="20"></td>
    </tr>
    <tr>
      <td><span class="style11">&nbsp;M&agrave;u nền:</span></td>
      <td><input name="mau_nen" type="text" id="mau_nen" value="<?php echo $maunen ?>" size="20"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="Xem kết quả" style="background:#FF9966">      </td>
    </tr>
  </table>
</form>
<div style="color:<?php echo $mauchu ?>; background-color:<?php echo $maunen ?>; margin:auto; width:400px; margin-top:5px; text-align:center"><?php echo $noidung ?></div>

</body>
</html>
