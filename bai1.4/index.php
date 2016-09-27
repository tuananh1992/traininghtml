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
				//=====load(url)======
				var url,data;
				// url = "files/01.html";
				//url = "files/01.php";
				//$('#info').load(url);
				//=====load(url,data)|data:object======
				//data	= {'title':'Jquery master'};
				//url 	="files/01a.php?id=10&name=Apple$t=" + Math.random();
				//$('#info').load(url, data);
				//=====load(url,function())======
				url = "files/01a.php?t=" + Math.random();
				$('#info').load(url,function(response, status){
					//console.log(response);
					console.log(status);
				});
			})
		});

	</script>
</head>
<body>
	<div id="info">Ready...</div>
	<input type="button" class="button" id="process" value="Process">	
</body>
</html>