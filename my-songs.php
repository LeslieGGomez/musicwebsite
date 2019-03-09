<html>
<head>
</head>
<center>
<body>
	
	<?php
	//session_start();
	//Gets the name from POST and stores it in SESSION
	$_SESSION['name'] = $_POST['name'];
	echo $_SESSION['name']."'s Playlist";
	//This will be the file that holds the songs owned by the user
	$file = "users/".$_SESSION['name']."/".$_SESSION['name'].".txt";
	if(!is_dir("users/".$_SESSION['name'])){
		$oldmask = umask(0);
		mkdir("users/".$_SESSION['name'],0777);
		mkdir("users/".$_SESSION['name']."/playlists",0777);
		umask($oldmask);
		$fp=fopen($file,"a");
		
	}
	$fp = fopen($file,"name");
		foreach($_POST['song'] as $s){
		fputs($fp, $s."\n");
 }
	
	
	?>
	
	<h1> Buy songs from Here:</h1>
	<form action="zmazon.php" method=POST>
		<input type='radio' name='playlist' value='zmazon'> zmazon<br>
		<button type="submit" class="btn btn-primary">Go</button>
	</form>
	<form action="ztunes.php" method=POST>
		<input type='radio' name='playlist' value='ztunes'> ztunes<br>
		<button type="submit" class="btn btn-primary">Go</button>
	</form>
	
</body>
</center>
</html>