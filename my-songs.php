<html>
    <body>
    <center>
        <?php
        //session_start();
        //Gets the name from POST and stores it in SESSION
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