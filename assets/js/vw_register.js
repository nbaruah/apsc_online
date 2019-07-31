/**
 * This file have 
 */

$(document).ready(function(){
	load_gender_types();
});

function load_gender_types(){
	var gender_select = $('#gender');
	$.get('user/get_data', function(data, textStatus, jqXHR) {
		//Parse each elemet
		$.each(data, function(i, item) {
			gender_select.append('<option>' + item.gender_type + '</option>');
		});
	});
}