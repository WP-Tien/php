<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<input type="file" id="hinh_dai_dien" />
<div id="image-holder"></div>
<script>
	
	$("#hinh_dai_dien").on('change', function () {
 
		if (typeof (FileReader) != "undefined") {
 
			var image_holder = $("#image-holder");
			image_holder.empty();
 
			var reader = new FileReader();
			reader.onload = function (e) {
				$("<img />", {
					"src": e.target.result,
					"class": "thumb-image"
				}).appendTo(image_holder);
 
			}
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);
		} else {
			alert("This browser does not support FileReader.");
		}
	});
	
</script>