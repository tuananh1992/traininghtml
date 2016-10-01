$(document).ready(function(){
	$.ajax({
		url: 'js/data.json',
		dataType: 'json',
		type: 'get',
		success: function(data){
		var row = '';
		//console.log(data[0].items.item[0].id);
		for(var i = 0; i < data.length; i++){
			for(var j = 0; j < data[i].items.item.length; j++){
				row += 	'<tr>'
							+'<td>'+data[i].items.item[j].id+'</td>'
							+'<td>'+data[i].items.item[j].type+'</td>'
							+'<td>'+data[i].items.item[j].name+'</td>'
							+'<td>'+data[i].items.item[j].ppu+'</td>'
							+'<td>'
									+'<table border="1">'
										+'<tr>'
											+'<th>id</th>'
											+'<th>type</th>'
										+'</tr>';
										var lap = "";
										for(var k = 0; k < data[i].items.item[j].batters.batter.length; k++){
											lap += '<tr>'
														+'<td>' +data[i].items.item[j].batters.batter[k].id+ '</td>'
														+'<td>' +data[i].items.item[j].batters.batter[k].type+ '</td>'
												+'</tr>';
										};
										row += lap;
								row +='</table>'	

							+'</td>'

					+	'</tr>';
			};
		};
		$('#viewData table tbody').html(row);
	},
	error: function function_name(){
		console.log('error');
	}
});
});





