<html>
    <body>
        <?php
        session_start();
        $_SESSION['name'] = $_POST['name'];
        ?>
        <h1> Welcome to zMazon Playlist</h1>
        <form action="my-songs.php" method=POST>
            <input type='radio' name='song' value='Song1'> Song1<br>
            <input type='radio' name='song' value='Song2'> Song2<br>
            <?php
            echo "<input type=\"hidden\" name=\"name\" value=\"" . $_SESSION['name'] . "\" />";
            ?>
            <button type="submit" class="btn btn-primary">buy</button>
        </form>
    </body>
</html>