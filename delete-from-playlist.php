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
		<body style="background-color:lavenderblush;">
			<h1>Removing Song From Playlist!</h1>
			<?php
				$song = $_POST["song"];
				remove($song);
				echo "<form action=\"my-songs.php\">";
					echo "<input type=\"submit\" value=\"Back to myLibrary\">";
				echo "</form>";
			?>
		</body>
</html>

<?php
function remove($song) {
  $_SESSION['playlist'] = array_diff($_SESSION['playlist'], [$song]);
  $_SESSION['playlist'] = array_values($_SESSION['playlist']);
}

function removeFromArray($song) {
  $array = array_diff($array, [$song]);
  $array = array_values($array);
}
?>