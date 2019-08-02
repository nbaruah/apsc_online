$(function() {
	//alert('Document is Ready!!');
	load_gender_types();
	load_states();
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
		url: "user/get_data/gender",
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
			$('.alert-danger').append('<center>'+ status.responseText +'</center>');
			console.log(status.statusText);
			console.log(errorThrow);
			console.log(status.responseText);
		}
	});
}

function load_states(){	
	$.ajax({
		url: "user/get_data/state",
		dataType: "json",
		type: "GET",
		cache: false,
		success: function(data) {
				var state_id = $('#states');
				$.each(data, function(i, item) {
				state_id.append('<option>' + item.name + '</option>');
			});
		},
		error: function(status, errorThrow) {
			$('.alert-danger').append('<center>'+ status.responseText +'</center>');
			console.log(status.statusText);
			console.log(errorThrow);
			console.log(status.responseText);
		}
	});
}
