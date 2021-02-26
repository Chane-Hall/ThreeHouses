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
	document.getElementById("req").classList.remove("acti");
	document.getElementById("book").classList.remove("acti");
	document.getElementById("rev").classList.remove("acti");
	document.getElementById("mess").classList.remove("acti");
	document.getElementById(idof).classList.add("acti");
	var xx  = document.getElementById("navsent");
	switch(idof){
		case "loca":
			xx.innerHTML = "";
			break;
		case "req":
			xx.innerHTML = "";
			break;
		case "book":
			xx.innerHTML = "";
			break;
		case "rev":
			xx.innerHTML = "";
			break;
		case "mess":
			xx.innerHTML = "";
			break;
	}
}
function editPro(){
	var x = document.getElementById("unamei");
	var xy = document.getElementById("ubdayi");
	var xyy = document.getElementById("uconti");
	var xyyy = document.getElementById("profimgi");
	var xyyyy = document.getElementById("buted");
	if (x.style.display === "none") {
		x.style.display = "block";
		xy.style.display = "block";
		xyy.style.display = "block";
		xyyy.style.display = "block";
		xyyyy.innerHTML ="Save";
	} else {
		x.style.display = "none";
		xy.style.display = "none";
		xyy.style.display = "none";
		xyyy.style.display = "none";
		xyyyy.innerHTML ="Edit";
	}
	
}

</script>

</head>
<body>
<?php
$db = mysqli_connect('localhost', 'root', '', 'tree');
$name = $_SESSION['username'];
 $user_check_query = "SELECT * FROM users WHERE username='$name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
$nameU = $user['username'];
$cont = $user['contact'];
$bDay = $user['birthday'];
$profp = $user['profpic'];

$user_check_query2 = "SELECT * FROM trees WHERE owner='$name'";
  $result2 = mysqli_query($db, $user_check_query2);
  $locations = mysqli_fetch_assoc($result2);


$user_check_query3 = "SELECT * FROM bookings WHERE owner='$name'";
  $result3 = mysqli_query($db, $user_check_query3);
  $bookings = mysqli_fetch_assoc($result3);

$user_check_query4 = "SELECT * FROM messages WHERE userTo='$name'";
  $result4 = mysqli_query($db, $user_check_query4);
  $messages = mysqli_fetch_assoc($result4);


?>
<div class="container" class="prof">
	<div class="row urow">
		<div class="col-4">
			<img id="profimg" src="dfh.png" alt="profile image" height="120">
			<input type="file" id="profimgi" class="notdis"/>
		</div>
		<div class="col-3">
		<?php
			echo '<h4 id="uname">' . $nameU .  '</h4>';
			echo '<input type="text" id="unamei" class="notdis"/>';
			echo '<h6 id="ubday">Birthday : '. $bDay .'</h6>';
			echo '<input type="text" id="ubdayi" class="notdis"/>';
			echo '<h6 id="ucont">Contact info :'. $cont .'</h6>';
			echo '<input type="text" id="uconti" class="notdis"/>';
		?>
		</div>
		<div class="col-1"><button id="buted" onclick="editPro()">Edit</button></div>
		<div class="col-4">
			<img src="A2.png" alt="Logo" height="120">
		</div>
	</div>
	<div class="row urow">
		<div class="col-2 hovv" id="loca"><h5 onclick="navbar('loca')">Locations</h5></div>
		<div class="col-2 hovv" id="req"><h5 onclick="navbar('req')">Requests</h5></div>
		<div class="col-2 hovv" id="book"><h5 onclick="navbar('book')">Bookings</h5></div>
		<div class="col-2 hovv" id="rev"><h5 onclick="navbar('rev')">Reviews</h5></div>
		<div class="col-2 hovv" id="mess"><h5 onclick="navbar('mess')">Messages</h5></div>
		<div class="col-2 hovv"><a href="home.php">Home</a></div>
	</div>
	<div class="row urow">
	<?php
		echo '<div id="locadiv">'. $locations .'</div>';
		//echo '<div id="locadiv">'. $locations .'</div>';
		echo '<div id="bookdiv">'. $bookings .'</div>';
		//echo '<div id="locadiv">'. $locations .'</div>';
		echo '<div id="locadiv">'. $messages .'</div>';
		
	?>
	</div>
</div>
</body>
</html>