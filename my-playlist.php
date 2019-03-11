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
		<h1>My Playlist</h1>
		</div>
		</br>
		 <?php
			printMyPlaylist();
			 echo "<form action=\"my-songs.php\">";
				echo "<input type=\"submit\" value=\"Add songs to Playlist\">";
				echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
			echo "</form>";
		?>
		</center>
	</body>
</html>
	

<?php
// this function prints the array in playlist
function printMyPlaylist() {
    // To traverse the session and place each element in the apporopriate cell.
    for ($i = 1; $i < count($_SESSION['playlist']); $i++) {
      $String = $_SESSION['playlist'][$i];
      echo "<tr>";
        echo "<td align = \"center\">$i.</td>";
        echo "<td align = \"center\">$String</td>";
        //creates delete button
        echo "<td align = \"center\">";
          echo "<form action=\"delete-from-playlist.php\" method=\"post\">";
          echo "<input type=\"submit\" name=\"song\" value=$String>";
			echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
          echo "</form>";
        echo "</td>";
      echo "</tr>";
    }
  echo "</table>";
}
?>