<?php
  session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
		<div class="container">
		<center>
			<!--this sets background, and adds details to styling--> 
			<body style="background-color:lavenderblush;">
				<div class="w3-container w3-purple">
					<h1>Song Removed From Library!</h1>
				</div>
				</br>
				<?php
				$song = $_POST["song"];
				remove($song);
				echo "<form action=\"my-songs.php\">";
					echo "<input type=\"submit\" value=\"Back to myLibrary\">";
				echo "</form>";
				?>
			</body>
		</center>
</html>

<?php
// this function compares array and removes item
function remove($song) {
  $_SESSION['songs'] = array_diff($_SESSION['songs'], [$song]);
  $_SESSION['songs'] = array_values($_SESSION['songs']);
}

function removeFromArray($song) {
  $array = array_diff($array, [$song]);
  $array = array_values($array);
}
?>