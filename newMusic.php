<html>
    <head>
    </head>
    <body style="background-color:powderblue;">
    <center>
        <h1>My Music Store</h1>
        <img src="images.jpg" width="70" height="60">
        <br/>
        <br/>
        <h1> Log In</h1>
        <form action="my-songs.php" method=POST>
            <input type='radio' name='name' value='Leslie'> Leslie<br>
            <input type='radio' name='name' value='Kelly'> Kelly<br>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
        <form action="my-songs.php" method=POST>
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
            <button type="submit" class="btn btn-primary">Create New User</button>
        </form>
    </center>    
</body>
</html>