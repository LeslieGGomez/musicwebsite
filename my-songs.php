<?php
  session_start();
?>
<html>
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<div class="container">
    <body style="background-color:lavenderblush;">
	<div class="container">
    <center>
	 <?php
        //Gets the name from POST if empty and stores it in SESSION
		$_SESSION['name'] = $_POST['name'];
       
        if (!isset($_SESSION['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }
        
        //Hold all needed information from username, dir, and .txt
        $username = $_POST['name'];
        $filedir = "users/" . "playlist/";
        $textpath = $filedir . $username . ".txt";
        //Creates a filepath and a .txt of the user if non-existent
        if (!is_dir($filedir)) {
            mkdir("users/", 0777);
            mkdir($filedir, 0777);
            if (!file_exists($textpath)) {
                $fp = fopen($textpath, "a");
            }
        }
		?>
	<div class="w3-container w3-purple">
	<?php
		echo "<h1> Welcome " . $_SESSION['name']."</h1>";
	?>
	</div>
	</br>
	</br>
	<div class="w3-container w3-blue">
		<h2>My Library</h2>
	</div>
		
		<!--This calls the function to print the items in the library-->
		<?php
			library();
		?>
		<div class="w3-container w3-blue">
		<h3>View My Playlist</h3>
		</div>
		<form action = "my-playlist.php" method=POST>
			<input type='radio' name='playlist' value='playlist'> myPlaylist<br>
			<?php
			//keeps all info under username
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
			 <button type="submit" class="btn btn-secondary">Go</button>
		</form>
		<div class="w3-container w3-blue">
        <h3> Buy songs from Here:</h3>
		</div>
        <form action="zmazon.php" method=POST>
            <input type="radio" value="zMazon">zAmazon<br>
			<?php
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
			<button type="submit" class="btn btn-secondary">Go</button>
        </form>
		<form action="ztunes.php" method=POST>
			<input type="radio" value="ztunes.php">ztunes<br>
            <?php
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
            <button type="submit" class="btn btn-secondary">Go</button>
        </form>
		</br>
		<form action="loginpage.php" method=POST>
            <button type="submit" class="btn btn-info">Log Out</button>
        </form>
		</br>
		</br>
		

        <?php
		//Got help on working with arrays from Jorge Garcia
		function library(){
		//sets table
		echo "<table>";
			echo "<tr>";
				echo "<th width = \"30%\">  </th>";
				echo "<th width = \"25%\">Add</th>";
				echo "<th width = \"25%\">Delete</th>";
			echo "</tr>";
			//populates table with songs
			for ($i = 1; $i < count($_SESSION['songs']); $i++) {
				$String = $_SESSION['songs'][$i];
				echo "<tr>";
				echo "<td align = \"center\">$i.</td>";
				echo "<td align = \"center\">$String</td>";
			//create add button to playlist
			echo "<td align = \"center\">";
				echo "<form action=\"playlist.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=$String>";
				echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
         		echo "</form>";
			echo "</td>";
			//creates delete button
			echo "<td align = \"center\">";
				echo "<form action=\"remove-song.php\" method=\"post\">";
				echo "<input type=\"submit\" name=\"song\" value=$String>";
				echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
				echo "</form>";
			echo "</td>";
			echo "</tr>";
			}
		echo "</table>";
}
        ?>
		
       
		 
    </center>
	</div>
</body>
</html> 