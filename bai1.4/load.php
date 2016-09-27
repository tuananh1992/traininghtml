<!DOCTYPE html>
<html>
<head>
	<title>loading images</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#save').click(function(){
				$('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif" /> loading...');
				$.ajax({
					type: "GET",
					dataType: "json",
					url: "js/jveldboom",
					success: function(d){
						setTimeout(function(){
							$('#loading').html('<img src="' + d.avatar_url + '"><br>');
							$('#loading').append('<div>'+ 'login: ' + d.login +'</div><br>');
							$('#loading').append('<div>'+ 'id: ' + d.id +'</div><br>');
							$('#loading').append('<div>'+ 'gravatar_id: ' + d.gravatar_id +'</div><br>');
							$('#loading').append('<div>'+ 'url: ' + d.url +'</div><br>');
							$('#loading').append('<div>'+ 'html_url: ' + d.html_url +'</div><br>');
							$('#loading').append('<div>'+ 'followers_url: ' + d.followers_url +'</div><br>');
							$('#loading').append('<div>'+ 'gists_url: ' + d.gists_url +'</div><br>');
							$('#loading').append('<div>'+ 'starred_url: ' + d.starred_url +'</div><br>');
							$('#loading').append('<div>'+ 'subscriptions_url: ' + d.subscriptions_url +'</div><br>');
							$('#loading').append('<div>'+ 'organizations_url: ' + d.organizations_url +'</div><br>');
							$('#loading').append('<div>'+ 'repos_url: ' + d.repos_url +'</div><br>');
							$('#loading').append('<div>'+ 'events_url: ' + d.events_url +'</div><br>');
							$('#loading').append('<div>'+ 'received_events_url: ' + d.received_events_url +'</div><br>');
							$('#loading').append('<div>'+ 'type: ' + d.type +'</div><br>');
							$('#loading').append('<div>'+ 'site_admin: ' + d.site_admin +'</div><br>');
							$('#loading').append('<div>'+ 'name: ' + d.name +'</div><br>');
							$('#loading').append('<div>'+ 'company: ' + d.company +'</div><br>');
							$('#loading').append('<div>'+ 'blog: ' + d.blog +'</div><br>');
							$('#loading').append('<div>'+ 'location: ' + d.location +'</div><br>');
							$('#loading').append('<div>'+ 'email: ' + d.email +'</div><br>');
							$('#loading').append('<div>'+ 'hireable: ' + d.hireable +'</div><br>');
							$('#loading').append('<div>'+ 'bio: ' + d.bio +'</div><br>');
							$('#loading').append('<div>'+ 'public_repos: ' + d.public_repos +'</div><br>');
							$('#loading').append('<div>'+ 'public_gists: ' + d.public_gists +'</div><br>');
							$('#loading').append('<div>'+ 'followers: ' + d.followers +'</div><br>');
							$('#loading').append('<div>'+ 'following: ' + d.following +'</div><br>');
							$('#loading').append('<div>'+ 'created_at: ' + d.created_at +'</div><br>');
							$('#loading').append('<div>'+ 'updated_at: ' + d.updated_at +'</div><br>');
						}, 2000);
					}
				});

			});

		});
	</script>
</head>
<body>
	<button id="save">Load User</button>
	<div id="loading"></div>	
</body>
</html>