<html>
    <body>
    <center>
        <?php
        //session_start();
        //Gets the name from POST and stores it in SESSION
        $_SESSION['name'] = $_POST['name'];
        echo $_SESSION['name'] . "'s Playlist";
        //This will be the file that holds the songs owned by the user
        $file = "users/" . $_SESSION['name'] . "/" . $_SESSION['name'] . ".txt";
        if (!is_dir("users/" . $_SESSION['name'])) {
            $oldmask = umask(0);
            mkdir("writeable/" . $_SESSION['name'], 0777);
            mkdir("writeable/" . $_SESSION['name'] . "/playlists", 0777);
            umask($oldmask);
            $fp = fopen($file, "a");
        }
        //Add songs
        $fp = fopen($file, "a"); //create file with name and opens file for write
        if (isset($_POST['song'])) {
            $record = $_POST['song'];
            foreach ($record as $song) {
                fwrite($fp, "$song");
                if (strstr($song, "\n")) {
                    fwrite($fp, "song\n");
                } else {
                    fwrite($fp, "$song\n");
                }
            }
        }
        fclose($fp);
        $_SESSION['name'] = $_POST['name'];
        echo $_SESSION['name'] . "'s Playlist";
        ?>
        <h1> Buy songs from Here:</h1>
        <form action="zmazon.php" method=POST>
            <input type='radio' name='song' value='zmazon'> zmazon<br>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
        <form action="ztunes.php" method=POST>
            <input type='radio' name='song' value='ztunes'> ztunes<br>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
    </center>
</body>
</html> 