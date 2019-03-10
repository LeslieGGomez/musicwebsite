
		<?php
		session_start();
		$_SESSION['name'] = "";
		 echo $_SESSION['name'] . "'s Playlist";
		 $playlistArr = array("song1" => song1);
		 echo $playlistArr['song1']. "<br/>";
		 $_SESSION['playlist'] = $playlistArr;
		?>
<html>
	<body>
	</body>
</html>
		