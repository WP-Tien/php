<html>
	<head>
		<title> Đọc số </title>
		<meta charset="UTF-8" >
	</head>
	<?php

		$so = 0;
		if ($_POST){
			$so = $_POST["txtSo"];
		}
		
		$chu = "";
		
		function doc_1_so($so)
		{
			switch($so)
			{
				case 1:
					$chu = "Một";
					break;
				case 2:
					$chu = "Hai";
					break;
				case 3:
					$chu = "Ba";
					break;
				case 4:
					$chu = "Bốn";
					break;
				case 5:
					$chu = "Năm";
					break;
				case 6:
					$chu = "Sáu";
					break;
				case 7:
					$chu = "Bảy";
					break;
				case 8:
					$chu = "Tám";
					break;
				case 9:
					$chu = "Chín";
					break;
				default:
					$chu = "Nhập từ 0 -> 9";
			}
			return $so;
		}
		
		// doc 3 so
		if(isset($_POST["txtSo"]))
		{
			$so = $_POST["txtSo"];
			if(is_numeric($so))
			{
				//tinh don vi
				$dv = $so%10;
				
				//tinh chuc
				$so = floor($so/10);
				$chuc = $so%10;
				
				//tinh tram
				$so = floor($so/10);
				$tram = $so%10;
				
				// truong hop ca 3 so deu la 0 
				if($dv ==0 && $chuc == 0 && $tram == 0 )
					$chu = "Không";
				else
				{
					if($dv!=0 && $dv!=5)
						$doc_dv = doc_1_so($dv);
					
					else if($dv==5 && $chuc !=0)
						$doc_dv = "Lăm";
					
					else if($dv == 5 && $chuc == 0)
						$doc_dv = "Năm";
					
					else $doc_dv = "";
					
					if($chuc!=0 && $chuc!=1)
						$doc_chuc = doc_1_so($chuc) . "Mươi";
					
					else if($chuc==1)
						$doc_chuc = "Mười";
					else $doc_chuc = "Lẻ";
					
					if($tram!=0)
						$doc_tram = doc_1_so($tram) . "Trăm";
					else
						$doc_tram = "";
						
						$chu = $doc_tram . " " . $doc_chuc . " " . $doc_dv;
					}
				
			}
		}
		
	?>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<th colspan="3"> Đọc 3 số </th>
				</tr>
				<tr>
					<td>Nhập số (0->999)</td>
					<td></td>
					<td>Bằng chữ: </td>
				</tr>
				<tr>
					<td> <input name="txtSo" type="text" value="<?php echo $so;?>" /> </td>
					<td> <input name="sbmSubmit" type="submit" value="=>" /> </td>
					<td> <input name="txtChu" type="text" value="<?php echo $chu;?>" readonly /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>