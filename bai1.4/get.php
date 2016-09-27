<!DOCTYPE html>
<html>
<head>
	<title>loading page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#process').click(function(e){
				//=====get(url,success)======
				var url,data2;
				url = "files/02.php?t=" + Math.random() + "&id=10&name=Apple";
				$.get(url,function(data,status,jqXHR){
					console.log(data);
					$('#info').html(data);
				})
				
			})
		});

	</script>
</head>
<body>
	<div id="info">Ready...</div>
	<input type="button" class="button" id="process" value="Process">	
</body>
</html>