<meta charset="utf-8" />
<style>
	#div_an_hien{
		transition-duration: 10s;
		background: #f00;
	}
</style>
<div id="div_an_hien">
	Hehehehehe
</div>
<input type="button" onclick="an_hien_div()" />
<script>
	function an_hien_div(){
		if(document.getElementById("div_an_hien").style.opacity == "0")
		{
			document.getElementById("div_an_hien").style.opacity = "1";
		}
		else
		{
			document.getElementById("div_an_hien").style.opacity = "0";
		}
	}
</script>