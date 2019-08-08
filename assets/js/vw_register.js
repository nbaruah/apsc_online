$(function() {
	//alert('Document is Ready!!');
	load_gender_types();
	load_states();
	load_categories();
	$(handle_pwd);
	$('#pwd_status').on('change', handle_pwd);
	load_pwd_types();
});

var ajax_call = function(url){
	$.ajax({
		url: 'user/get_data/categories',
		type: 'GET',
		dataType: 'json',
		cache: false
	});
}

var fail_handler = function(XmlHttpReq, status, errorThrown) {
    alert("Sorry, there was a problem! - " + errorThrown);
    console.log("Error: " + errorThrown);
    console.log("Status: " + status);
    console.dir(XmlHttpReq); 
}

var ajax_complete_handler = function(XMLhttpReq, status){
	console.log('AJAX complete');
}

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
	.fail(fail_handler)
	.always(ajax_complete_handler);
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
		error: fail_handler,
		complete:ajax_complete_handler
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
	.fail(fail_handler)
	.always(ajax_complete_handler);
	
}


var handle_pwd = function(){
	if ($('#pwd_status').val() == 'No') {
		$('.pwd').prop('disabled', true);
	} 
	else {
		$('.pwd').prop('disabled', false);
	}
}

function load_pwd_types(){
	var pwd_cat_id = $('#pwd_cat');
	$.ajax({
		url: 'user/get_data/pwd_types',
		type: 'GET',
		dataType: 'json',
	})
	.done(function(data) {
		console.log("success");
		$.each(data, function(index, val) {
			 /* iterate through array or object */
			 pwd_cat_id.append('<option>'+ val.details +'</option>');
		});
	})
	.fail(fail_handler)
	.always(ajax_complete_handler);	
}