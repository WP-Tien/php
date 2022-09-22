<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					Thông tin file
				</td>
			</tr>
			<tr>
				<td>
					Chọn báo: 
					<input name="tap_hinh" type="file" />
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" value="Lấy thông tin" />
				</td>
			</tr>

			<tr>
				<td>
					<?php
						if($_FILES)
						{
							echo "Tên file:" . $_FILES["tap_hinh"]["name"]."<br/>";
							echo "Kích thước file:" . $_FILES["tap_hinh"]["size"];
						}
					?>
				</td>
			</tr>
		</table>
	</form>
	<div>
		
	</div>
</body>
</html>