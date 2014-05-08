$(document).ready(function() {
	
	var Dropzone = require("dropzone");
	
	var wizard = $('#some-wizard').wizard({
		keyboard : true,
		contentHeight : 700,
		contentWidth : 700,
		backdrop : true,
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

(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);