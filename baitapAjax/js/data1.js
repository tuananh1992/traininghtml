$(document).ready(function(){
	$.ajax({
		url: 'js/generated.json',
		dataType: 'json',
		type: 'get',
		success: function(data){
		//console.log(data);
		//console.log(data[0].friends[0].name);
		var row = '';
		for(i = 0; i < data.length; i++){
			for(j = 0; j < data[i].friends.length; j++){
				row +=	'<tr><td>' + data[i].friends[j].id + '</td><td>' + data[i].friends[j].name + '</td></tr>';
			};
			
		};
		$('#viewData table tbody').html(row);
	},
	error: function function_name(){
		console.log('error');
	}
});
});





