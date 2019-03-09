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
        <h1> Buy songs from Here:</h1>
        <form action="zmazon.php" method=POST>
            <input type='radio' name='song' value='zmazon'> zmazon<br>
            <?php//sets hidden information of the user's name.
            echo "<input type=\"hidden\" name=\"name\" value=\"" . $_SESSION['name'] . "\" />";
            ?>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
        <form action="ztunes.php" method=POST>
            <input type='radio' name='song' value='ztunes'> ztunes<br>
            <?php//sets hidden information of the user's name.
            echo "<input type=\"hidden\" name=\"name\" value=\"" . $_SESSION['name'] . "\" />";
            ?>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
    </center>
</body>
</html> 