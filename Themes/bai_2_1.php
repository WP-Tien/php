<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	
	<table>
		<tr>
			<td>
				Xếp loại cuối năm
			</td>
		</tr>
		<tr>
			<td>
				Điểm trung bình HKI:
			</td>
			<td>
				<input id="dtb_hk1" type="text" />
			</td>
		</tr>
		
		<tr>
			<td>
				Điểm trung bình HKII:
			</td>
			<td>
				<input id="dtb_hk2" type="text" />
			</td>
		</tr>

		<tr>
			<td>
				Điểm trung bình cả năm:
			</td>
			<td>
				<input id="tb_ca_nam" type="text" />
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="button" onclick="xep_loai()" value="Xếp loại" />
			</td>
		</tr>

		<tr>
			<td>
				Xếp loại:
			</td>
			<td id="xep_loai">
				
			</td>
		</tr>
	</table>

	<script>
		function xep_loai()
		{
			diem_hk1 = document.getElementById("dtb_hk1").value;
			diem_hk2 = document.getElementById("dtb_hk2").value;

			diem_tb_ca_nam = (diem_hk1 * 1 + diem_hk2 * 2) / 3;

			if(diem_tb_ca_nam <= 10 && diem_tb_ca_nam >= 0 && diem_hk1 >= 0 && diem_hk1 <= 10 && diem_hk2 >= 0 && diem_hk2 <= 10)
			{
				if(diem_tb_ca_nam >= 8 && diem_tb_ca_nam <= 10)
				{
					xep_loai = "Giỏi";
				}
				else if(diem_tb_ca_nam >= 6.5)
				{
					xep_loai = "Khá";
				}
				else if(diem_tb_ca_nam >= 5)
				{
					xep_loai = "Trung Bình";
				}
				else if(diem_tb_ca_nam >= 3)
				{
					xep_loai = "Yếu";
				}
				else
				{
					xep_loai = "Kém";
				}
			}
			else
			{
				xep_loai = "What do you want from me?";
			}

			document.getElementById("tb_ca_nam").value = diem_tb_ca_nam;
			document.getElementById("xep_loai").innerHTML = xep_loai;
		}
	</script>

</body>
</html>