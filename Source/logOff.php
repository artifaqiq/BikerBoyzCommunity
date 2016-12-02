<?php
	session_start();
        echo "<script>alert(\"До новых встреч ".$_SESSION['username']."\");
            location.href = 'index.html';</script>";
	$_SESSION = array();
	session_destroy();
?>