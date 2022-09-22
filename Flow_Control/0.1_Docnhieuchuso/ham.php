<?php
function docbaso($so)
{
	$dv=$so%10;
	$chuc=($so/10)%10;
	$tram=($so/100)%10;


	$chuso="";
	if ($tram==0 && $chuc==0 && $dv!=0)
	{
			$chuso=doc1so($dv);
	}
	else if($tram==0 && $chuc!=0)
	{
		if($chuc==1)
		{
			if ($dv==0)
				$chuso="Mười";	
			else if ($dv==5)
				$chuso= "Mười Lăm";
			else
				$chuso ="Mười " . doc1so($dv); 		
		}
		else
		{
			if($dv==0)
			{
				$chuso = doc1so($chuc) ." Mươi ";
			}
			else if($dv==1)
			{
				$chuso = doc1so($chuc) ." Mươi Mốt";
			} 
			else if($dv==5)
			{
				$chuso=doc1so($chuc) ." Mươi Lăm"; 
			}
			else
			{
				$chuso = doc1so($chuc) ." Mươi " . doc1so($dv);	
			}
		}
	}
	else if($tram!=0)
	{
		$chuso=doc1so($tram) . " Trăm ";	
		if($chuc==0 && $dv!=0)
		{
			
			$chuso .=" lẻ " . doc1so($dv);	
		}
		else if($chuc!=0)
		{
			if($chuc==1)
			{
				if ($dv==0)
					$chuso .="Mười";	
				else if ($dv==5)
					$chuso .= "Mười Lăm";
				else
					$chuso .="Mười " . doc1so($dv); 		
			}
			else
			{
				if($dv==0)
				{
					$chuso .= doc1so($chuc) ." Mươi ";
				}
				else if($dv==1)
				{
					$chuso .= doc1so($chuc) ." Mươi Mốt";
				} 
				else if($dv==5)
				{
					$chuso .=doc1so($chuc) ." Mươi Lăm"; 
				}
				else
				{
					$chuso .= doc1so($chuc) ." Mươi " . doc1so($dv);	
				}
			}
				
		}
		
	} 	
	return $chuso;
}

function doc1so($so)
{
	$kq="";
	switch($so)
	{
		case 0:
		$kq= "Không";
		break;	
		case 1:
		$kq= "Một";
		break;	
		case 2:
		$kq= "Hai";
		break;	
		case 3:
		$kq= "Ba";
		break;	
		case 4:
		$kq= "Bốn";
		break;	
		case 5:
		$kq= "Năm";
		break;	
		case 6:
		$kq= "Sáu";
		break;	
		case 7:
		$kq= "Bảy";
		break;	
		case 8:
		$kq= "Tám";
		break;	
		case 9:
		$kq= "Chín";
		break;	
	}
	return $kq;	
}

///////////////////////////
function doiso($so)
{ 
		if (($so < 0) || ($so > 999999999999)) 
		{ 
			echo "Số này nằm ngoài phạm vi";
		} 
        $Ty = floor($so / 1000000000);/* Tỷ  */
        $so -= $Ty * 1000000000;
 		$Gn = floor($so / 1000000);  /* Triệu (giga) */ 
		$so -= $Gn * 1000000; 
		$kn = floor($so / 1000);     /* Ngàn (kilo) */ 
		$so -= $kn * 1000; 
		$Hn = floor($so / 100);      /* Trăm (hecto) */ 
		$so -= $Hn * 100; 
		$Dn = floor($so / 10);       /* Mười (deca) */ 
		$n = $so % 10;             
	
		$res = ""; 
        if ($Ty) 
		{ 
			$res .= doiso($Ty) . " tỷ"; 
		} 	
	
		if ($Gn) 
		{ 
            $res .= (empty($res) ? "" : " ") .
			    doiso($Gn) . " triệu"; 
		} 
	
		if ($kn) 
		{ 
			$res .= (empty($res) ? "" : " ") . 
				doiso($kn) . " ngàn"; 
		} 
	
		if ($Hn) 
		{ 
			$res .= (empty($res) ? "" : " ") . 
				doiso($Hn) . " trăm"; 
		} 
	
		$mot = array("", "một", "hai", "ba", "bốn", "năm", "sáu", 
			"bảy", "tám", "chín", "mười", "mười một", "mười hai", "mười ba", 
			"mười bốn", "mười lăm", "mười sáu", "mười bảy", "mười tám", 
			"mười chín"); 
		$hangmuoi = array("", "", "hai mươi", "ba mươi", "bốn mươi", "năm mươi", "sáu mươi", 
			"bảy mươi", "tám mươi", "chín mươi"); 
	
		if ($Dn || $n) 
		{ 
			if (!empty($res)) 
			{ 
				$res .= " "; 
			} 
	
			if ($Dn < 2) 
			{ 
				$res .= $mot[$Dn * 10 + $n]; 
			} 
			else 
			{ 
				$res .= $hangmuoi[$Dn]; 
	
				if ($n) 
				{ 
					$res .= "-" . $mot[$n]; 
				} 
			} 
		} 
	
		if (empty($res)) 
		{ 
			$res = "không"; 
		} 
	
		return $res; 
} 
?>