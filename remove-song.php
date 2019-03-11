<?php
  session_start();
?>
<html>
	<body style="background-color:powderblue;">
	<h1>Removing Song!</h1>
    <?php
      $song = $_POST["song"];
      removeSongFromSession($song);
      echo "<form action=\"my-songs.php\">";
        echo "<input type=\"submit\" value=\"Back to myLibrary\">";
      echo "</form>";
    ?>
  </body>
</html>

<?php
function removeSong($song) {
  $_SESSION['songs'] = array_diff($_SESSION['songs'], [$song]);
  $_SESSION['songs'] = array_values($_SESSION['songs']);
}

function deletingsong($song) {
  $array = array_diff($array, [$song]);
  $array = array_values($array);
}
?>