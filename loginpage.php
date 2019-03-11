<?php
session_start();
	//Arrays are created here using SESSION
	$_SESSION['name'] = "";
	$_SESSION['songs'] = array("Take a Walk", "Sit Next to Me", "Reptilia", "Electric Feel","Animal");
	$_SESSION['playlist'] = array();
?>

<html>
    <head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<div class="container">
    <body style="background-color:lavenderblush;">
    <center>
		<div class="w3-container w3-purple">
			<h1>My Music Store</h1>
		</div>
		</br>
		<div class="w3-container w3-pink">
			<h1> Log In</h1>
		</div>
		</br>
        <form action="my-songs.php" method=POST>
            <input type='radio' name='name' value='Leslie'> Leslie<br>
            <input type='radio' name='name' value='Kelly'> Kelly<br>
            <button type="submit" class="btn btn-secondary">Log In</button>
        </form>
        <form action="my-songs.php" method=POST>
		<div class="w3-container w3-pink">
            <label style = "font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size:24px;">Name:</label>
		</div>
		</br>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
			</br>
            <button type="submit" class="btn btn-secondary">Create New User</button>
        </form>
    </center>    
</body>
</html>