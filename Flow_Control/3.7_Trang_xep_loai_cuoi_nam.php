<html>
	<head>	
		<title> Xếp loại cuối năm học </title>
		<meta charset="utf-8" /> 
	<script language="javascript">
			function dtb_xeploai(hk1, hk2)
			{
				dtb = (eval(hk1) + (eval(hk2)*2))/3
				if (dtb>=9)
					xeploai.innerText = "Giỏi"
				else if (dtb>=7 )
					xeploai.innerText = "Khá"
				else if (dtb>=5)
					xeploai.innerText = "Trung bình"
				else
					xeploai.innerText = "Yếu";
				return dtb;
			}
	</script>
	</head>
	<body>
	<div style="width:410px; height:190px; box-shadow: 10px 10px 5px #888; background:rgba(0, 179, 232, 0.65); margin:0 auto; ">
		<form id="form1">
			<table border="1" width="400px" cellpadding="5px" style="border-collapse:collapse ; margin: 5px 5px 5px 5px">
				<caption style="padding: 5px"> Xếp loại cuối năm học </caption>
				<tr> 
					<td> Điểm trung bình HK1: </td>
					<td><input name="hk1" type="text" id="tbhk1" /> </td>
				</tr>
				<tr>	
					<td> Điểm trung bình HK2: </td>
					<td><input name="hk2" type="text" id="tbhk2"/> </td>
				</tr>
				<tr>	
					<td> Điểm trung bình cuối năm: </td>
					<td><input name="cn" type="text" id="dtbcn"/> </td>
				</tr>
				<tr>	
					<td> Xếp loại: </td>
					<td><b id="xeploai"></b></td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input name="sbm"  value="Xuất xếp loại" type="button" onClick="dtbcn.value=dtb_xeploai(tbhk1.value, tbhk2.value)" /> </td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>