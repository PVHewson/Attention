$("document").ready(function(){
	
	$('#modalContribute').modal({
		onOpenEnd: function(){ $('#contribSummary').focus();}
	});
	
	// Use AJAX to submit new articles
	$('#formContribute').submit(function(e){
		e.preventDefault();

		var data = new FormData();
		data.append('summary', $("#contribSummary").val());
		data.append('body', $("#contribBody").val());
		data.append('photo', $('#contribPhoto')[0].files[0]);
		data.append('source', $("#contribSource").val());

		$.ajax({
			url: 'contribute.php',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST', // For jQuery < 1.9
			success: function(data){
				$('.modal').modal('close');
				M.toast({html: data});
			}
		});
	});
});
