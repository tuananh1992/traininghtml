<!DOCTYPE html>
<html>
<head>
	<title>loading images</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#save').click(function(){

				$.ajax({
					type: "GET",
					dataType: "json",
					url: "http://localhost/bai1/bai1.4/js/appointments.json",
					beforeSend: function(){
						$('#loading').show();
					},
					success: function(data){
						var row = '';
						for(var i = 0; i < data.length; i++) {
							row += '<tr><td>'+ data[i].id +'</td><td>'+ data[i].index +'</td><td>'+ data[i].isActive +'</td><td>'+ data[i].age +'</td><td>'+ data[i].balance +'</td><td>'+ data[i].status +'</td><td>'+ data[i].name +'</td><td>'+ data[i].gender +'</td><td>'+ data[i].company +'</td><td>'+ data[i].email +'</td><td>'+ data[i].phone +'</td><td>'+ data[i].style +'</td><td>'+ data[i].address +'</td><td>'+ data[i].about +'</td><td>'+ data[i].start +'</td><td>'+ data[i].end +'</td></tr>';
						};
						$('#viewData table tbody').html(row);
					},
					error: function function_name(argument) {
						console.log('Error: ');
					},
					complete: function(){
						$('#loading').hide();
					}
				});
			});

		});
	</script>
</head>
<body>
	<div id="loading" style="display: none;" >
		<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif" /> loading...
	</div>

	<button id="save">Loading data</button>
	<div id="viewData" >
		<table border="1">
			<thead>
				<tr>
					<th>id</th>
					<th>index</th>
					<th>isActive</th>
					<th>Age</th>
					<th>Balance</th>
					<th>status</th>
					<th>name</th>
					<th>gender</th>
					<th>company</th>
					<th>email</th>
					<th>phone</th>
					<th>style</th>
					<th>address</th>
					<th>about</th>
					<th>start</th>
					<th>end</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</body>
</html>