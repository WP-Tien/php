<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Tinh nam am lich</title>
  <style type="text/css">

  .style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
  .style7 {
    font-family: LucidaHandwriting, LucidaCalligraphy;
    font-size: 20px;
    font-weight: bold;
    color: #FFFFFF;
  }
  .style8 {
    color: #FF0000;
    font-weight: bold;
  }

  </style>
  </head>
  <?php 
    $am_lich = "";
    if (isset($_POST["txtDuonglich"])){
      $duong_lich = $_POST["txtDuonglich"];
      if(is_numeric($duong_lich)){
        $nam = ($duong_lich -3) % 10;
        switch($nam) 
        {
          case 0:
            $can = "Quý";
            break;
          case 1:
            $can = "Giáp";
            break;
          case 2:
            $can = "Ất";  
            break;
          case 3: 
            $can = "Bính";
            break;
          case 4:
            $can = "Đinh";
            break;
          case 5:
            $can = "Mậu";
            break;
          case 6:
            $can = "Kỷ";
            break;
          case 7:
            $can = "Canh";
            break;
          case 8: 
            $can = "Tân";
            break;
          case 9:
            $can = "Nhâm";
            break;
        }

        $nam = ($duong_lich - 3) % 12;
        switch($nam)
        {
          case 0:
            $chi = "Hợi";
            break;
          case 1: 
            $chi = "Tý";
            break;
          case 2:
            $chi = "Sửu";
            break;
          case 3:
            $chi = "Dần";
            break;
          case 4:
            $chi = "Mão";
            break;
          case 5;
            $chi = "Thìn";
            break;
          case 6:
            $chi = "Tỵ";
            break;
          case 7: 
            $chi = "Ngọ";
            break;
          case 8:
            $chi = "Mùi";
            break;
          case 9:
            $chi = "Thân";
            break;
          case 10:
            $chi = "Dậu";
            break;
          case 11:
            $chi = "Tuất";
            break;
        }

        $am_lich = $can . " " . $chi;
      }
    }

  ?>
  <body>

  <form id="form1" name="form1" method="post" action="">
    <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#AEE4FF">
      <tr align="center" bgcolor="#005CB9">
        <td colspan="3"><span class="style7">TÍNH NĂM ÂM LỊCH </span></td>
      </tr>
      <tr>
        <td width="133"><p align="center"><span class="style5"> Năm dương lịch </span></p></td>
        <td width="57"><span class="style5">
          <label></label>
        </span></td>
        <td width="140" align="center" class="style5">Năm âm lịch</td>
      </tr>
      <tr>
        <td align="center" class="style5">
          <input name="txtDuonglich" type="text" id="duong" value="<?php echo $duong_lich; ?>" size="10"/>
        </td>
        <td align="center">
          <input type="submit" name="Submit" value="=>" style="background:#ffffcc" class="style8"/>      </td>
        <td align="center" class="style5">
          <input name="txtAmlich" type="text" class="style8" id="am" style="background-color:#FFFFCC" value="<?php echo $am_lich; ?>" size="15" readonly="true"/>
        </td>
      </tr>
    </table>
  </form>
  </body>
</html>
