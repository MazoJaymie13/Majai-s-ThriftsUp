$(function(){
	
	function load_images(){
		$.ajax({
			type : 'POST',
			url: 'baby.php'
			
		}).done(function(data){
			$("#baby_images").html(data)
		})
	}
	load_images()
})