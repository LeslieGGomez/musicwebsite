 <?php session_start();
 $_SESSION['zamazon'] = array("Tension", "ILYSB", "Sunflower", "My Favorite Part");
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
		<body style="background-color:lavenderblush;">
		<center>
		<div class="w3-container w3-purple">
        <h1> Welcome to zMazon Playlist</h1>
		</div>
		</br>
		<div class="w3-container w3-blue">
		<h2> This are our songs!</h2>
		</div>
         <?php
			printamazon();
			 echo "<form action=\"my-songs.php\">";
				echo "<input type=\"submit\" value=\"Back to myLibrary\">";
			echo "</form>";
		?>
		
		<?php
		function printamazon(){
		
		echo "<table>";
				echo "<tr>";
				echo "<th width = \"30%\">Name</th>";
				echo "<th width = \"25%\">Buy</th>";
			echo "</tr>";
			for ($i = 0; $i < sizeof($_SESSION['zamazon']); $i++) {
				$String = $_SESSION['zamazon'][$i];
				echo "<tr>";
				echo "<td align = \"center\">$i.</td>";
				echo "<td align = \"center\">$String</td>";
			echo "<td align = \"center\">";
				echo "<form action=\"addSong.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=$String>";
				echo "</form>";
			echo "</td>";
  
			}
		echo "</table>";
}
        ?>
		</center
    </body>
</html>