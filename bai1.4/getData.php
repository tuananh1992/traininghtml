<!DOCTYPE html>
<html>
<head>
	<title>loading images</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		var data = [
		{
			"id": "55f99b757f48ae74f2932aba",
			"index": 0,
			"isActive": true,
			"balance": "$2,552.38",
			"age": 40,
			"status": "outOfOffice",
			"name": "Isabelle Mckay",
			"gender": "female",
			"company": "BIOSPAN",
			"email": "isabellemckay@biospan.com",
			"phone": "+1 (879) 468-3257",
			"style": "#EA157A",
			"address": "408 Malta Street, Loyalhanna, Georgia, 7085",
			"about": "Exercitation esse amet in commodo pariatur sit tempor deserunt. Exercitation elit exercitation consectetur dolor duis aliquip. Ea eu magna non deserunt id irure proident minim nisi laborum nisi exercitation. Nisi fugiat sunt ipsum amet amet nisi quis adipisicing pariatur amet deserunt officia id mollit. Sunt ullamco laborum labore Lorem Lorem ullamco excepteur voluptate magna sit et eiusmod nisi.\r\n",
			"start": "2015-11-27 15:30",
			"end": "2015-11-27 20:30"
		},
		{
			"id": "55f99b758c8117b13579dd99",
			"index": 1,
			"isActive": true,
			"balance": "$3,660.67",
			"age": 37,
			"status": "busy",
			"name": "Mollie Langley",
			"gender": "female",
			"company": "PIGZART",
			"email": "mollielangley@pigzart.com",
			"phone": "+1 (984) 501-2056",
			"style": "#0069A5",
			"address": "507 Waldorf Court, Selma, Palau, 7229",
			"about": "Sit aliquip eu eu aliquip magna irure fugiat exercitation voluptate nulla ex. Officia culpa esse esse ex do adipisicing non velit dolore esse aute cupidatat. Qui nulla ad mollit esse enim dolor laborum nulla sint nulla dolor laboris quis in. Laboris magna culpa ipsum proident ad quis consequat irure ea officia anim nulla sunt laborum. Sint do pariatur velit amet labore exercitation tempor duis labore deserunt. Est exercitation dolor ut aute exercitation do aliquip ea.\r\n",
			"start": "2015-11-26 12:30",
			"end": "2015-11-26 17:30"
		},
		{
			"id": "55f99b75164620213788c947",
			"index": 2,
			"isActive": false,
			"balance": "$3,514.75",
			"age": 30,
			"status": "tentative",
			"name": "Effie Robertson",
			"gender": "female",
			"company": "MULTIFLEX",
			"email": "effierobertson@multiflex.com",
			"phone": "+1 (918) 425-2176",
			"style": "#FF6800",
			"address": "531 Brighton Avenue, Felt, Pennsylvania, 5007",
			"about": "Tempor enim amet dolor est minim adipisicing culpa reprehenderit reprehenderit laboris incididunt. Voluptate consequat incididunt amet veniam enim ad elit duis voluptate in aliqua. Exercitation proident non aliqua mollit. Proident non ex exercitation ad incididunt adipisicing exercitation. Deserunt minim do laborum fugiat. Eu eu dolore consectetur eiusmod cillum amet reprehenderit fugiat eu. Non aute exercitation nulla mollit ipsum laborum in elit ipsum dolor aute ut ut eiusmod.\r\n",
			"start": "2015-11-23 07:30",
			"end": "2015-11-23 10:00"
		},
		{
			"id": "55f99b75d8bd0e0159f00455",
			"index": 3,
			"isActive": false,
			"balance": "$3,291.13",
			"age": 32,
			"status": "free",
			"name": "Terra Everett",
			"gender": "female",
			"company": "CORMORAN",
			"email": "terraeverett@cormoran.com",
			"phone": "+1 (945) 419-2144",
			"style": "#FF8D00",
			"address": "549 Boulevard Court, Kirk, District Of Columbia, 6432",
			"about": "Dolore cupidatat officia laborum dolor deserunt fugiat est pariatur sint commodo cillum enim ipsum. Cillum id ut sit eiusmod occaecat ea. Mollit voluptate eiusmod amet laboris aliquip dolor amet sit est veniam. Esse magna voluptate laborum minim mollit enim aute sit culpa veniam fugiat est. Aliquip excepteur nulla est proident fugiat quis est deserunt aliquip.\r\n",
			"start": "2015-11-27 13:00",
			"end": "2015-11-27 15:30"
		},
		{
			"id": "55f99b75e4a87c4b81a38149",
			"index": 4,
			"isActive": true,
			"balance": "$2,037.18",
			"age": 29,
			"status": "busy",
			"name": "Eugenia Dixon",
			"gender": "female",
			"company": "NORALI",
			"email": "eugeniadixon@norali.com",
			"phone": "+1 (964) 553-2774",
			"style": "#25A0DA",
			"address": "797 Moore Place, Libertytown, Marshall Islands, 8461",
			"about": "In ea veniam enim nulla minim duis cillum ullamco exercitation do minim voluptate. Nisi quis aliquip et esse occaecat adipisicing anim ad nisi. Ad ut adipisicing eiusmod sunt laboris cupidatat.\r\n",
			"start": "2015-11-27 08:30",
			"end": "2015-11-27 12:00"
		},
		{
			"id": "55f99b75e5102735f12ae957",
			"index": 5,
			"isActive": true,
			"balance": "$3,364.06",
			"age": 40,
			"status": "free",
			"name": "Elba Olsen",
			"gender": "female",
			"company": "ESCHOIR",
			"email": "elbaolsen@eschoir.com",
			"phone": "+1 (903) 427-2684",
			"style": "#7FD13B",
			"address": "742 Richardson Street, Thomasville, Alabama, 8935",
			"about": "Veniam aliqua tempor nulla mollit duis consectetur reprehenderit esse sit aliquip cupidatat. Eiusmod ea ut occaecat officia officia deserunt sit consectetur veniam eu mollit et magna minim. Laboris exercitation sunt irure nisi aliquip ea magna magna proident nostrud nostrud. Adipisicing labore nisi elit commodo exercitation eiusmod sunt do do.\r\n",
			"start": "2015-11-24 04:30",
			"end": "2015-11-27 15:30"
		},
		{
			"id": "55f99b75faf527c50b3da56d",
			"index": 6,
			"isActive": true,
			"balance": "$2,795.81",
			"age": 36,
			"status": "free",
			"name": "Kaye Goodman",
			"gender": "female",
			"company": "COSMOSIS",
			"email": "kayegoodman@cosmosis.com",
			"phone": "+1 (855) 476-2815",
			"style": "#A0A700",
			"address": "935 Ryerson Street, Sanford, Ohio, 3274",
			"about": "Ullamco nostrud excepteur anim ut Lorem in ea enim aute est aute qui sunt. Anim deserunt sit magna elit enim id elit nulla. Do magna consectetur officia cupidatat duis. Sint consectetur ad enim irure consequat enim sit dolor. Commodo laborum consectetur in sit esse ut minim cupidatat reprehenderit veniam enim nisi.\r\n",
			"start": "2015-11-24 16:00",
			"end": "2015-11-24 19:00"
		}
		];
	</script>
</head>
<body>
	<ul>
		<script type="text/javascript">
			for (i = 0; i < data.length; i++) {
				document.write('<h4>'+ 'id: ' 		+ data[i].id 		+ '</h4>');
				document.write('<li>'+ 'index: ' 	+ data[i].index 	+ '</li>');
				document.write('<li>'+ 'isActive: ' + data[i].isActive 	+ '</li>');
				document.write('<li>'+ 'balance: ' 	+ data[i].balance 	+ '</li>');
				document.write('<li>'+ 'age: ' 		+ data[i].age 		+ '</li>');
				document.write('<li>'+ 'status: ' 	+ data[i].status 	+ '</li>');
				document.write('<li>'+ 'name: ' 	+ data[i].name 		+ '</li>');
				document.write('<li>'+ 'gender: ' 	+ data[i].gender 	+ '</li>');
				document.write('<li>'+ 'company: ' 	+ data[i].company 	+ '</li>');
				document.write('<li>'+ 'email: ' 	+ data[i].email 	+ '</li>');
				document.write('<li>'+ 'phone: ' 	+ data[i].phone 	+ '</li>');
				document.write('<li>'+ 'style: ' 	+ data[i].style 	+ '</li>');
				document.write('<li>'+ 'address: ' 	+ data[i].address 	+ '</li>');
				document.write('<li>'+ 'about: ' 	+ data[i].about 	+ '</li>');
				document.write('<li>'+ 'start: ' 	+ data[i].start 	+ '</li>');
				document.write('<li>'+ 'end: ' 		+ data[i].end 		+ '</li>');
			}
		</script>
	</ul>
</body>
</html>