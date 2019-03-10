<html>
    <body>
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

        $fp = fopen($textpath, "a");
        if (isset($_POST['song'])) {
            fwrite($fp, "$song\n");
        }
        fclose($fp);
        ?>
		<h1> Welcome</h1>
		<h3>View Playlist</h3>
		<form action = "playlist.php" method=POST>
			<input type='radio' name='playlist' value='playlist'> myPlaylist<br>
			 <button type="submit" class="btn btn-primary">Go</button>
		</form>
			
        <h3> Buy songs from Here:</h3>
        <form action="zmazon.php" method=POST>
            <input type="radio" value="zMazon">zAmazon<br>
			<input type="radio" formaction ="ztunes.php" value="ztunes.php">ztunes<br>
            <?php
            echo "<input type='hidden' name='name' value='" . $_SESSION['name'] . "'>";
            ?>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>

       
		 
    </center>
</body>
</html> 