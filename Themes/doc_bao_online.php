<html>
	<head>
		<meta charset="utf-8" />
	</head>
	
	<body>
		<form>
			<table>
				<tr>
					<td colspan="2">
						Đọc báo
					</td>
				</tr>
				<tr>
					<td>
						Chọn báo
					</td>
					<td>
						<select id="chon_bao">
							<option value="http://thanhnien.com.vn">Báo thanh niên</option>
							<option value="http://vnexpress.net">VnExpress</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="button" onclick='hien_bao()' value="Đọc báo" />
					</td>
				</tr>
			</table>
		</form>
		<script>
			function hien_bao()
			{
				chon_bao = document.getElementById("chon_bao");
				window.open(chon_bao.value);
			}
		</script>
	</body>
</html>