var $j = jQuery.noConflict();

	$j(document).ready(function(){
		$j('#myInput').bind('click', function(){
			$j('#home_p').trigger('click');
		});
	});