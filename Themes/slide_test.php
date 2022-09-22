<html>
	<head>
		<style>
			.slide_banner img{
				width: 100%;
				transition-duration: 2s;
			}
			.slide_banner{
				position: relative;
				overflow: hidden;
			}
			#next, #prev{
				position: absolute;
				top: 40%;
				width: 10%;
				border-radius: 50%;
				overflow: hidden;
				background: rgba(200,200,200,0.8);
				cursor: pointer;
			}
			#next img, #prev img{
				width: 100%;
			}
			#next{
				right: 0;
			}
			#prev{
				left: 0;
				transform: rotateY(180deg);
			}
		</style>
		<script>
			hien_tai = 1;
			so_luong = 4;
			
			function hieu_ung()
			{
				hinh = document.getElementById("hinh");
				hinh.style.opacity = 0;
				setTimeout(function(){
					hinh.setAttribute("src","images/" + hien_tai + '.jpg');
					hinh.style.opacity = 1;
				},2000);
				
			}
		
			function next()
			{
				if(hien_tai < 4)
					hien_tai++;
				else
					hien_tai = 1;
				hieu_ung();
			}
			
			function prev()
			{
				if(hien_tai > 1)
					hien_tai--;
				else
					hien_tai = so_luong;
				hieu_ung();
			}
			
			function dung_slide()
			{
				clearInterval(chay_slide_2);
			}
			
			function chay_slide()
			{
				chay_slide_2 = setInterval(function(){
					next();
				},6000);
			}
			
			
			
		</script>
	</head>
	
	<body onload="chay_slide()">
		<div class="slide_banner" onmouseover="dung_slide()" onmouseout="chay_slide()">
			<img id="hinh" src="images/1.jpg"/>
			<div id="next" onclick="next()">
				<img src="images/button.png"/>
			</div>
			<div id="prev" onclick="prev()">
				<img src="images/button.png"/>
			</div>
		</div>
	</body>
</html>