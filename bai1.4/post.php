<!DOCTYPE html>
<html>
<head>
	<title>loading page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#process").click(function(e){
				var url, dta;
				url = "files/03.php?t=" + Math.random();
				dta = {
					"username": $("#appForm :text[name='username']").val(),
					"password": $("#appForm :password[name='password']").val()
				};
				$.post(url,dta,function(data){
					$("#info").html(data);	
				});
			});
		});

	</script>
</head>
<body>
	<div id="info">Ready...</div>
	
	<form name="appForm" id="appForm" action="" method="post" class="boxA">
		<div>
			Username:
			<input type="text" name="username" class="input">
		</div>
		<div>
			Password:
			<input type="password" name="password" class="input">
		</div>
		<div><input type="button" class="button" id="process" value="Process"></div>
		
	</form>	
</body>
</html>