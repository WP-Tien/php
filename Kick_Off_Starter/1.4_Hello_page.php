<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset= utf-8" />
    <title>In loi chao</title>
    <style>
		table,th,td{
			border-collapse: collapse;
		}
	</style>
    </head>
    <?php
    $hoten = '';
    $loichao = '';
      if($_POST){
        $hoten=$_POST["txtHoten"];
        $loichao="Chào bạn, " . $hoten;
      }
		?>

    <body>
    	<form name="frm_In_loi_chao" method="post" action="">
        <table width="500" border="1" align="center">
      <tbody>
        <tr>
        <caption>Tiến Nguyễn code xuyên màn đêm</caption>
          <td colspan="2">In lời chào</td>
        </tr>
        <tr>
          <td>Nhập tên của bạn</td>
          <td><input name="txtHoten" type="text" value="<?php echo $hoten; ?>" /></td>
        </tr>
        <tr>
          <td colspan="2"> <?php echo $loichao; ?> </td>
        </tr>
        <tr align="center">
          <td colspan="2"><input name="submit" type="submit" value="Chào"/></td>
        </tr>
      </tbody>
		</table>

        </form>
    </body>
</html>