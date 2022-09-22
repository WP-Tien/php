<meta charset="utf-8" />
<?php
class phan_so
{
	public $tu_so, $mau_so;
	
	function __construct($tu_so = 0, $mau_so = 1)
	{
		$this->tu_so = $tu_so;
		$this->mau_so = $mau_so;
	}
	
	function in_phan_so()
	{
		echo $this->tu_so . "/" . $this->mau_so;
	}
	
	function ucln()
	{
		$so_be = (abs($this->tu_so )>abs($this->mau_so))?abs($this->mau_so):abs($this->tu_so );
		
		for($i = $so_be; $i >= 1; $i--)
		{
			if($this->tu_so % $i == 0 && $this->mau_so % $i == 0)
			{
				return $i;
			}
		}
		
		return 1;
	}
	
	function toi_gian()
	{
		$ucln = $this->ucln();
		
		$this->tu_so = $this->tu_so/$ucln;
		$this->mau_so = $this->mau_so/$ucln;
	}
	
	function tong_phan_so($phan_so_2)
	{
		$phan_so_tong = new phan_so();
		$phan_so_tong->mau_so = $this->mau_so * $phan_so_2->mau_so;
		$phan_so_tong->tu_so = $this->tu_so * $phan_so_2->mau_so + $this->mau_so * $phan_so_2->tu_so;
		
		$phan_so_tong->toi_gian();
		return $phan_so_tong;
	}
}




$phan_so = new phan_so(1,2);
$phan_so_2 = new phan_so(4,6);
$phan_so_tong = $phan_so->tong_phan_so($phan_so_2);

$phan_so_tong->in_phan_so();
?>

