<html>
	<head>	
		<title> Tính tiền thưởng cuối năm </title>
		<meta charset="utf-8" /> 
	<script>
				loai = new Array(9);
				loai[0] = 2;
				loai[1] = 1.8;
				loai[2] = 1.2;
				loai[3] = 0.8;

			function tinhtien(tien)
			{
				chosen = document.form1.chon.selectedIndex;

				//document.form1.tienthuong.value = loai[chosen] * tien;

				tienthuong.innerText = loai[chosen] * tien;

				alert(chosen);
				console.log(chosen);
			}
	</script>
	</head>
	<body>
	<div style="width:410px; height:160px; box-shadow: 10px 10px 5px #888; background:rgba(0, 179, 232, 0.65); margin:0 auto; ">
		<form name="form1">
			<table border="1" width="400px" cellpadding="5px" style="border-collapse:collapse ; margin: 5px 5px 5px 5px">
				<caption style="padding: 5px"> Tính tiền thưởng cuối năm </caption>
				<tr> 
					<td> Tiền lương: </td>
					<td><input name="tl" type="text" id="tienluong" /> </td>
				</tr>
				<tr>	
					<td> Xếp loại: </td>
					<td>
						<select name="chon">
							<option value="A">Loại A
							<option value="B">Loại B
							<option value="C">Loại C
							<option value="D">Loại D
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input name="sbm"  value="Tính" type="button" onClick="tinhtien(tienluong.value)" /> </td>
				</tr>
				<tr>
					<td colspan="2" align="center" height="30px"><b name="tienthuong" id="tienthuong"><input name="tienthuong" type="text" /></b></td>
				<tr>
			</table>
		</form>
	</div>
	</body>
</html>