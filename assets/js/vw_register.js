$(function() {
	//alert('Document is Ready!!');
	load_gender_types();
});

/*function load_gender_types(){
	var gender_select = $('#gender');
	$.get('get_data/gender', function(data, textStatus, jqXHR) {
		//Parse each elemet
		$.each(data, function(i, item) {
			gender_select.append('<option>' + item.gender_type + '</option>');
		});
	});
}*/

/*function load_states() {
	var state_id = $('#states');
	$.get('get_data/state', function(data) {
		$.each(data, function(index, val) {
			state_id.append('<option>' + val.name + '</option>');
		});
	});
}*/


function load_gender_types(){	
	$.ajax({
		url: "get_data/gender",
		dataType: "json",
		type: "GET",
		cache: false,
		success: function(data) {
				var gender_id = $('#gender');
				$.each(data, function(i, item) {
				gender_id.append('<option>' + item.gender_type + '</option>');
			});
		},
		error: function(status, errorThrow) {
			alert("Sorry!, some error occured Please try again");
			console.log(status.statusText);
			console.log(errorThrow);
			console.log(status);
		},
		beforeSend: function(){
            $('#gender').html('<center><i class="fa fa-refresh fa-spin fa-2x"></i></center>').fadeIn(100);
        }
	});
}
