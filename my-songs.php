<?php
  session_start();
?>
<html>
    <body style="background-color:powderblue;">
    <center>
	 <?php
        //Gets the name from POST if empty and stores it in SESSION
        if (!isset($_SESSION['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }
        echo $_SESSION['name'] . "'s Playlist";
        //Hold all needed information from username, dir, and .txt
        $username = $_POST['name'];
        $filedir = "writeable/" . "playlist/";
        $textpath = $filedir . $username . ".txt";
        //Creates a filepath and a .txt of the user if non-existent
        if (!is_dir($filedir)) {
            mkdir("writeable/", 0777);
            mkdir($filedir, 0777);
            if (!file_exists($textpath)) {
                $fp = fopen($textpath, "a");
            }
        }
		?>
	<h1> Welcome</h1>
		<h2>My Library</h2>
		
		<!--This calls the function to print the items in the library-->
		<?php
			printMyLibrary();
		?>
		
		<h3>View My Playlist</h3>
		<form action = "my-playlist.php" method=POST>
			<input type='radio' name='playlist' value='playlist'> myPlaylist<br>
			 <button type="submit" class="btn btn-primary">Go</button>
		</form>
			
        <h3> Buy songs from Here:</h3>
        <form action="zmazon.php" method=POST>
            <input type="radio" value="zMazon">zAmazon<br>
			<?php
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
			<button type="submit" class="btn btn-primary">Go</button>
        </form>
		<form action="ztunes.php" method=POST>
			<input type="radio" value="ztunes.php">ztunes<br>
            <?php
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
		</br>
		</br>
		</br>
		<?php
		echo "<form action=\"loginpage.php\">";
			echo "<input type=\"submit\" value=\"Log Out\">";
		echo "</form>";
		?>

        <?php
		function printMyLibrary(){
		// Table headers are created here.
		echo "<table>";
			echo "<tr>";
				echo "<th width = \"10%\">#</th>";
				echo "<th width = \"25%\">Name</th>";
				echo "<th width = \"25%\">Add to Playlist</th>";
				echo "<th width = \"25%\">Remove</th>";
			echo "</tr>";

		// To traverse the session and place each element in the apporopriate cell.
			for ($i = 1; $i < count($_SESSION['songs']); $i++) {
				$String = $_SESSION['songs'][$i];
				echo "<tr>";

        // Song number
				echo "<td align = \"center\">$i.</td>";
        // Song name
				echo "<td align = \"center\">$String</td>";
        // Playlist buttons
			echo "<td align = \"center\">";
				echo "<form action=\"playlist.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=\"Add\">";
				echo "</form>";
			echo "</td>";
        // Remove buttons
			echo "<td align = \"center\">";
				echo "<form action=\"remove-song.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=\"Delete\">";
				echo "</form>";
			echo "</td>";

			echo "</tr>";
			}
		echo "</table>";
}
        ?>
		
       
		 
    </center>
</body>
</html> 