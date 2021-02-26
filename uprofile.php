<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="57x57" href="ac.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="ac.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="ac.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="ac.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="ac.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="ac.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="ac.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="ac.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="ac.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="ac.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="ac.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="ac.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="ac.ico/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<script>
function navbar(idof){
	document.getElementById("loca").classList.remove("acti");
	document.getElementById("rev").classList.remove("acti");
	document.getElementById("mess").classList.remove("acti");
	var xx  = document.getElementById("navsent");
	switch(idof){
		case "loca":
			document.getElementById("loca").classList.add("acti");
			xx.innerHTML = "";
			break;
		case "rev":	
			document.getElementById("rev").classList.add("acti");
			xx.innerHTML = "";
			break;
		case "mess":
			document.getElementById("mess").classList.add("acti");
			xx.innerHTML = "";
			break;
	}
}

</script>

</head>
<body>
<div class="container" class="prof">
	<div class="row urow">
		<div class="col-4">
			<img id="profimg" src="dfh.png" alt="profile image" height="120">
		</div>
		<div class="col-3">
			<h4>Name</h4>
			<h6>Birthday : </h6>
			<h6>Connection : </h6>
			<button>Connect/Disconnect</button>
		</div>
		<div class="col-1"></div>
		<div class="col-4">
			<img src="A2.png" alt="Logo" height="120">
		</div>
	</div>
	<div class="row urow">
		<div class="col-2 hovv" id="loca"><h5 onclick="navbar('loca')">Locations</h5></div>
		<div class="col-2 hovv" id="rev"><h5 onclick="navbar('rev')">Reviews</h5></div>
		<div class="col-2 hovv" id="mess"><h5 onclick="navbar('mess')">Message</h5></div>
	</div>
	<div class="row urow">
		<div id="navsent">
		</div>
	</div>
</div>
</body>
</html>