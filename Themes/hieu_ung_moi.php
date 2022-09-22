<style>
	#test{
		height: 10000px;
		width: 500px;
		background: #f00;
	}

	#video{
		width: 300px;
		height: 180px;
		background: #00f;
		position: absolute;
		right: 0;
		transition-duration: 10s;
	}
</style>
<div id="test">

</div>
<div id="video">
	
</div>
<script>
	do_cao_man_hinh = screen.height - 100;
	window.addEventListener("scroll", scrolldiv);

	document.getElementById("video").style.top =  do_cao_man_hinh/2;

	function scrolldiv()
	{
		document.getElementById("video").style.top = document.body.scrollTop + do_cao_man_hinh/2;
	}
</script>