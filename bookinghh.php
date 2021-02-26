<!DOCTYPE html >
<html>
<head>
<title>three huggers habitats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="styling/style.css">
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
</head>
<body id="body_bg">
<div class="container">
<div class="row">
<div class="col-12">
    <form class="login-form" method="post" action="authen_login.php" >
    <h3>Book your Habitat</h3>
         <label for="user_id">User Name</label><br />
         <input type="text" name="user_id" id="user_id"><br />
	<label for="user_pass">Password</label><br />
         <input type="password" name="user_pass" id="user_pass"></input><br />
	 <label for="habit">Choosen Habitat</label><br />
         <input type="text" name="habit" id="habit"><br />
	 <label for="date1">Climb in date</label><br />
         <input type="date" name="date1" id="date1"><br />
	 <label for="date2">Climb out date</label><br />
         <input type="date" name="date2" id="date2"><br /><br />
	<input type="submit" value="Submit" />
         <input type="reset" value="Reset"/>
	<p id="error"></p>
    </form>
    </div>
</div>	
</div>
</body>
</html>