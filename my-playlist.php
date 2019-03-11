<?php
  session_start();
?>
<html>
	<body style="background-color:powderblue;">
		<center>
		<h1>My Playlist</h1>
		 <?php
			printMyPlaylist();
			 echo "<form action=\"my-songs.php\">";
				echo "<input type=\"submit\" value=\"Add songs to Playlist\">";
			echo "</form>";
		?>
		</center>
	</body>
</html>
	

<?php
// printMyPlaylist was used to take all the values of the specified session and
// put them in a html table format. This is how all the pages display their
// music.
function printMyPlaylist() {
  // Table headers.
  echo "<table>";
    echo "<tr>";
      echo "<th width = \"10%\">#</th>";
      echo "<th width = \"25%\">Song</th>";
      echo "<th width = \"25%\">Remove</th>";
    echo "</tr>";

    // To traverse the session and place each element in the apporopriate cell.
    for ($i = 1; $i < count($_SESSION['playlist']); $i++) {
      $String = $_SESSION['playlist'][$i];
      echo "<tr>";
        // Song number
        echo "<td align = \"center\">$i.</td>";
        // Song name
        echo "<td align = \"center\">$String</td>";
        // Remove from playlist button
        echo "<td align = \"center\">";
          echo "<form action=\"removeFromPlaylist.php\" method=\"post\">";
          echo "<input type=\"submit\" name=\"song\" value=$String>";
          echo "</form>";
        echo "</td>";
      echo "</tr>";
    }
  echo "</table>";
}
?>