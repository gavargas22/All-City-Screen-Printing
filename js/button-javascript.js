jQuery(document).ready(function() {
	jQuery('.work-tile-image-holder label').click(function() {
		jQuery(this).toggleClass('selected-job-type');
	});

	jQuery('.job-type-custom-selector').click(function() {
		jQuery(this).toggleClass('selected-job-type');
	});	
});