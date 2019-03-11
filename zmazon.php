 <?php session_start();
    
 ?>
<html>
	<body style="background-color:powderblue;"> 
        <h1> Welcome to zMazon Playlist</h1>
		<h2> This are our songs!</h2>
         <?php
			printamazon();
		?>
		
		<?php
		function printamazon(){
		// Table headers are created here.
		echo "<table>";
			echo "<tr>";
				echo "<th width = \"10%\">#</th>";
				echo "<th width = \"25%\">Name</th>";
				echo "<th width = \"25%\">Buy</th>";
			echo "</tr>";

		// To traverse the session and place each element in the apporopriate cell.
			for ($i = 1; $i < count($_SESSION['zamazon']); $i++) {
				$String = $_SESSION['zamazon'][$i];
				echo "<tr>";
        // Song number
				echo "<td align = \"center\">$i.</td>";
        // Song name
				echo "<td align = \"center\">$String</td>";
        // Playlist buttons
			echo "<td align = \"center\">";
				echo "<form action=\"addSong.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=\"Add\">";
				echo "</form>";
			echo "</td>";
  
			}
		echo "</table>";
}
        ?>
    </body>
</html>