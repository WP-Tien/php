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
		display: none;
		position: fixed;
		right: 0;
		top: 30%;
	}
</style>
<div id="test">

</div>
<div id="video">
	
</div>
<script>
	window.addEventListener("scroll", scrolldiv);

	function scrolldiv()
	{
		if(document.body.scrollTop > 50)
		{
			document.getElementById("video").style.display = "block";
		}
		else
		{
			document.getElementById("video").style.display = "none";
		}
	}
</script>