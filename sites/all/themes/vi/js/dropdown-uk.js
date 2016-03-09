(function ($) {
  //var currenturl = $(location).attr('href');

	$('#edit-lang-dropdown-select').append('<option value="en-GB/">English UK1</option>');
	$('#lang-dropdown-form > div').append('<input type="hidden" value="/en-gb/body-by-vi-overview-presentation" name="en-GB">');
	
	/*$('#edit-lang-dropdown-select').change(function() {
		alert($(this).val());
	});*/
	
	
	//$('#edit-lang-dropdown-select').on('change', function() {
	//		alert($(this).val());
		//if(this.value == "en-gb"){
		//	window.location = "http://vi.co.uk/challenge-portal/body-by-vi-overview";
		//}
		//alert( this.value ); // or $(this).val()
	//});
	
	//$('#edit-lang-dropdown-select').change(function(){
		//if($(this).val() == "en-gb"){
	//		alert($('#edit-lang-dropdown-select').val());
			//window.location = "http://vi.co.uk/challenge-portal/body-by-vi-overview";
		//}
	//};
	
	if(currenturl.split('/')[3] == 'en-gb'){
		window.location = "http://vi.co.uk/challenge-portal/body-by-vi-overview";
	}
})(jQuery);