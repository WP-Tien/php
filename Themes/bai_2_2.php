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
				Tiền lương:
			</td>
			<td>
				<input id="luong" type="text" />
			</td>
		</tr>
		
		<tr>
			<td>
				Xếp loại
			</td>
			<td>
				<select id="xep_loai">
					<option value="2">Loại A</option>
					<option value="1.8">Loại B</option>
					<option value="1.2">Loại C</option>
					<option value="0.8">Loại D</option>
				</select>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="button" onclick="tinh_thuong()" value="Xếp loại" />
			</td>
		</tr>

		<tr>
			<td colspan="2" id="tien_thuong">
				aaaaa
			</td>
		</tr>

	</table>

	<script>
		function tinh_thuong()
		{
			luong = document.getElementById("luong").value;
			xep_loai = document.getElementById("xep_loai").value;

			tien_thuong = luong * xep_loai;

			document.getElementById("tien_thuong").innerHTML = "Tiền thưởng là: " + tien_thuong + " đồng";
		}

		function abc()
		{
			return 3 + 2;
		}

		alert(eval("abc()"));
	</script>

</body>
</html>