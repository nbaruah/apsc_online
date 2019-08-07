$(function() {
	//alert('Document is Ready!!');
	load_gender_types();
	load_states();
	load_categories();
	$(handle_pwd);
	$('#pwd_status').on('change', handle_pwd);
});

function load_gender_types(){
	var gender_id = $('#gender');
	$.ajax({
		url: 'user/get_data/genders',
		type: 'GET',
		dataType: 'json',
	})
	.done(function(data) {
		console.log("success");
		$.each(data, function(index, val) {
			 /* iterate through array or object */
			 gender_id.append('<option>' + val.gender_type + '</option>');
		});

	})
	.fail(function(jqXHR, textStatus, errorThrown) {
		alert( "Sorry, there was a problem!--" + textStatus );
		//console.log(jqXHR);
		console.log(errorThrown);
	})
	.always(function() {
		console.log("complete");
	});
	
}

function load_states(){	
	$.ajax({
		url: "user/get_data/states",
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
			alert('Sorry! Something went wrong');
			//console.log(status.statusText);
			console.log(errorThrow);
			//console.log(status.responseText);
		}
	});
}

function load_categories(){
	var cat_id = $('#category');

	$.ajax({
		url: 'user/get_data/categories',
		type: 'GET',
		dataType: 'json'
	})
	.done(function(data) {
		console.log("success");
		$.each(data, function(index, val) {
			 /* iterate through array or object */
			 cat_id.append('<option>' + val.cat_type + '</option>');
		});
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}


var handle_pwd = function(){
	if ($('#pwd_status').val() == 'Yes') {
		$('.pwd').prop('disabled', true);
	} 
	else {
		$('.pwd').prop('disabled', false);
	}
}