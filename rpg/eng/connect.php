<?php
	$conn = new mysqli("localhost","root","","pass_gen");
	if (!$conn) {
		die("Connection Lost:".connect_error);
	}
?>
