$(document).ready(function(){
	$.ajax({
		url: 'js/comments',
		dataType: 'json',
		type: 'get',
		success: function(data){
		//console.log(data);
		//console.log(data[1].name);
		var row = '';
		for(i = 0; i < data.length; i++){
			row +=	'<tr><td>' + data[i].postId + '</td><td>' + data[i].id + '</td><td>' + data[i].name + '</td><td>' + data[i].email + '</td><td>' + data[i].body + '</td></tr>';
		};
		$('#viewData1 table tbody').html(row);
	},
	error: function function_name(){
		console.log('error');
	}
});
});

$(document).ready(function(){
	$('#show_data').click(function(){
		$.ajax({
			url: 'js/posts',
			type: 'get',
			dataType: 'json',
			success: function(d){
				//console.log(d);
				var row = '';
				for(i = 0; i < d.length; i++){
					row += '<tr><td>' + d[i].userId + '</td><td>' + d[i].id + '</td><td>' + d[i].title + '</td><td>' + d[i].body + '</td></tr>';
				};
				$('#viewData2 table tbody').html(row);
			},
			error: function function_name(){
				console.log('error');
			}
		});
	});
});



