<?php
  session_start();
?>

<html>
  <body style="background-color:powderblue;">
	<center>
	<h1>Adding song to playlist!</h1>
	</br>
	</br>
	</br>
	</br>
    <?php
      // Stores the sent item as a string and prints a form.
      $song = $_POST["song"];
      addSongToSession($song);
      echo "<form action=\"my-songs.php\">";
        echo "The song $song has been added to myPlaylist.</br>";
		echo "</br>";
        echo "<input type=\"submit\" value=\"Add More Songs\">";
      echo "</form>";
    ?>
	</center>
  </body>

</html>

<?php
// addSongToSession is a way for the string that was passed to be added into the
// songs session which are the songs that will be displayed on the myPlaylist page.
function addSongToSession($songToAdd) {
  array_push($_SESSION['playlist'], $songToAdd);
}
?>