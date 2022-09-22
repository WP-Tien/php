<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Giới thiệu</title>
        <style>
            p{
				text-align:center;
				border:3px red solid;
				background-color:yellow;
				width:300px;
				height:auto;
				margin:100px auto;
			}
        </style>
    </head>
		<?php 
        		$tieude="Chào mừng bạn tới <br> Ngôn ngữ lập trình PHP ";
		$a = 10;
		$b = 5;
		$tong = $a + $b;
		echo "<br> Tổng: " .$tong;
       		?>
	<body>
		<p><?php echo $tieude; ?></p>
    </body>
</html>