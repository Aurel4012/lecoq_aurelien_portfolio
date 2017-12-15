$( document ).ready(function() {
	$('#telecharger').click(function(e){
		var lien = $(this).attr('data-lien');
		setTimeout(function(){
			window.location.href = lien;
		}, 2000);
	})
});