$(document).ready(function() {
	
	//var Dropzone = require("dropzone");
	var wizard = $('#some-wizard').wizard({
		keyboard : true,
		contentHeight : 900,
		contentWidth : 700,
		backdrop : 'static',
		submitUrl: "http://submit.jotform.us/submit/41107452846150/"
	});

	$('#open-wizard').click(function(e) {
		e.preventDefault();
		wizard.show();
	});

	$('#open-wizard-larger').click(function(e) {
		e.preventDefault();
		wizard.show();
	});

});