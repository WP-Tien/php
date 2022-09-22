<html>
	<head>
		<style>
			.san_pham{
				width: 300px;
				position: relative;
			}
			.san_pham img{
				width: 100%;
			}
			.san_pham:hover > .nut_mua{
				opacity: 1;
			}
			.nut_mua{
				position: absolute;
				width: 90px;
				top: 20px;
				left: 100px;
				opacity: 0;
				transition-duration: 3s;
			}
		</style>
		
	</head>
	
	<body onload="chay_slide()">
		<div class="san_pham">
			<div class="hinh_san_pham">
				<img src="images/1.jpg" />
			</div>
			<div class="nut_mua">
				<img src="images/cart.png" />
			</div>
		</div>
	</body>
</html>