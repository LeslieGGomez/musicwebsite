<?php
  session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<div class="container">
	<center>
	<body style="background-color:lavenderblush;">
	<div class="w3-container w3-purple">
        <h1> Adding Song!</h1>
	</div>
	</br>
  
    <?php
      // Stores the sent item as a string and prints a form.
      $song = $_POST["song"];
      addSongToSession($song);
      echo "<form action=\"my-songs.php\">";
        echo "The song $song has been added to library!</br>";
        echo "<input type=\"submit\" value=\"Back to Library\">";
      echo "</form>";
    ?>
	</center>
  </body>

</html>

<?php
function addSongToSession($songToAdd) {
  array_push($_SESSION['songs'], $songToAdd);
}
?>
