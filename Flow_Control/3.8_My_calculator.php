<meta charset="utf-8" />
<?php
class phep_tinh{
	public $so_thu_1, $so_thu_2;
	
	function __construct($so_thu_1, $so_thu_2)
	{
		$this->so_thu_1 = $so_thu_1;
		$this->so_thu_2 = $so_thu_2;
	}
	
	function tong()
	{
		return $this->so_thu_1 + $this->so_thu_2;
	}
	
	function hieu()
	{
		return $this->so_thu_1 - $this->so_thu_2; 
	}
	
	function tich()
	{
		return $this->so_thu_1 * $this->so_thu_2; 
	}
	
	function thuong()
	{
		return $this->so_thu_1 / $this->so_thu_2; 
	}
}

if($_POST)
{
	//print_r($_POST);
	$phep_tinh = new phep_tinh($_POST["so_thu_1"],$_POST["so_thu_2"]);
	
	switch($_POST["phep_tinh"])
	{
		case "cong":
			$ket_qua = $phep_tinh->so_thu_1 . " + " . $phep_tinh->so_thu_2 . " = " . $phep_tinh->tong();
			break;
		case "tru":
			$ket_qua = $phep_tinh->so_thu_1 . " - " . $phep_tinh->so_thu_2 . " = " . $phep_tinh->hieu();
			break;
		case "nhan":
			$ket_qua = $phep_tinh->so_thu_1 . " x " . $phep_tinh->so_thu_2 . " = " . $phep_tinh->tich();
			break;
		case "chia":
			$ket_qua = $phep_tinh->so_thu_1 . " : " . $phep_tinh->so_thu_2 . " = " . $phep_tinh->thuong();
			break;
		default:
			$ket_qua = "bạn nên kiểm tra dậy thần kinh của mình nhé!";
	}

}
?>

<form action="" method="post">
	<table>
		<tr>
			<td colspan="3">Phép tính</td>
		</tr>
		<tr>
			<td>Số thứ 1</td>
			<td><input type="text" name="so_thu_1" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Số thứ 2</td>
			<td><input type="text" name="so_thu_2" /></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
				<label><input type="radio" name="phep_tinh" value="cong" /> Cộng </label>
				<label><input type="radio" name="phep_tinh" value="tru" /> Trừ </label>
				<label><input type="radio" name="phep_tinh" value="nhan" /> Nhân </label>
				<label><input type="radio" name="phep_tinh" value="chia" /> Chia </label>
			</td>
			<td>
				<input type="submit" value="Tính" />
			</td>
		</tr>
		<tr>
			<td><?php echo (isset($ket_qua)) ? "$ket_qua" : ""; ?></td>
		</tr>
	</table>
</form>