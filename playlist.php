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
			<center>
				<div class="w3-container w3-purple">
					<h1>Adding song to playlist!</h1>
				</div>
				</br>
				</br>
				</br>
				</br>
				<?php
	// Stores the sent item as a string and prints a form.
      $song = $_POST["song"];
      adding($song);
      echo "<form action=\"my-songs.php\">";
        echo "The song $song has been added to myPlaylist.</br>";
		echo "</br>";
        echo "<input type=\"submit\" value=\"Add More Songs\">";
        echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
      echo "</form>";
    ?>
	</center>
  </body>

</html>

<?php
// add song to array 
function adding($songToAdd) {
  array_push($_SESSION['playlist'], $songToAdd);
}
?>