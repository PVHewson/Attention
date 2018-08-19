$("document").ready(function(){
	//Manage an AJAX form submission
	$('#modalRegister').modal({
		onOpenEnd: function(){ $('#regGivenName').focus();}
	});

});
