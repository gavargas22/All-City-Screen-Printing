//var Dropzone = require("dropzone");

$(document).ready(function() {
				var wizard = $('#some-wizard').wizard({
					keyboard : true,
					contentHeight : 600,
					contentWidth : 700,
					backdrop: 'static'
				});

				$('#open-wizard').click(function(e) {
					e.preventDefault();
					wizard.show();
				});
			});