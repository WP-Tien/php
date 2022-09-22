<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ket qua hoc tap</title>
</head>
  <?php 
    $hk1 = 0;
    $hk2 = 0;
    $diem_tb = 0;
    $xep_loai = 0;
    $kq = 0;

    if($_POST) {
      $hk1 = $_POST["hk1"];
      $hk2 = $_POST["hk2"];

      $diem_tb =  ($hk1 + ($hk2 *2)) / 3;
      
      if($hk1 <= 10 && $hk1 >= 0 && $hk2 <= 10 && $hk2 > 0){
        if($diem_tb >= 5) {
          $kq = "Được lên lớp";
        } else {
          $kq =  "Ở lại lớp";
        }
      } else {
        $kq = "Bạn học lớp mấy vậy?";
      }

      if($hk1 <= 10 && $hk1 >= 0 && $hk2 <= 10 && $hk2 >= 0){
        if($diem_tb >= 8 && $diem_tb <= 10){
          $xep_loai = "Giỏi";
        } elseif ($diem_tb >= 6.5){
          $xep_loai = "Khá";
        } elseif ($diem_tb >= 5){
          $xep_loai = "Trung Bình";
        } elseif ($diem_tb >= 3){
          $xep_loai = "Yếu";
        } else {
          $xep_loai = "Kém";
        }
      } else {
        $xep_loai = "Bạn nhập cái gì vậy????";
      }
    }


  ?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#DB95B8">
    <tr bgcolor="#BDBAE7">
      <td colspan="2" bgcolor="#CC3366"> <div align="center"><span class="style1">KẾT QUẢ HỌC TẬP</span></div></td>
    </tr>
    <tr>
      <td><span class="style6">&nbsp;Điểm HK1: </span></td>
      <td><input name="hk1" type="text" id="hk1" size="25" value=""/></td>
    </tr>
    <tr>
      <td><span class="style6">&nbsp;Điểm HK2:</span></td>
      <td><label>
        <input name="hk2" type="text" id="hk2" size="25" value=""/>
      </label></td>
    </tr>
    <tr>
      <td><span class="style6">&nbsp;Điểm trung bình: </span></td>
      <td><input name="tb" type="text" id="tb" size="25" readonly="true" style="background:#FFFFCC" value="<?php echo $diem_tb;?>" /></td>
    </tr>
    <tr>
      <td><span class="style6">&nbsp;Kết quả: </span></td>
      <td><input name="kq" type="text" id="kq" size="25" readonly="true" style="background:#FFFFCC" value="<?php echo $kq;?>"/></td>
    </tr>
    <tr>
      <td width="151"><span class="style6">&nbsp;Xếp loại học lực: </span></td>
      <td width="235"><label>
        <input name="xl" type="text" id="xl" size="25" readonly="true" style="background:#FFFFCC" value="<?php echo $xep_loai; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="Xem kết quả" />      </td>
    </tr>
  </table>
</form>
</body>
</html>
