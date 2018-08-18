$("document").ready(function(){
	//Manage an AJAX form submission
	$('#modalLogin').modal({
		onOpenEnd: function(){ $('#loginUsername').focus();}
	});
	return;
	$('#formLogin').submit(function(e){
		e.preventDefault();

		var data = new FormData();
		data.append('photo', $('#photo')[0].files[0]);
		data.append('fullname', $("#fullname").val());
		data.append('source', $("#source").val());
		data.append('summary', $("#summary").val());

		$.ajax({
			url: 'user.php?register',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST', // For jQuery < 1.9
			success: function(data){
				alert(data);
				$('.modal').modal('close');
			}
		});
	})

});
