<?php
session_start();
session_unset(); 
session_destroy(); 

setcookie("SESSION-ID", "", time() - 3600);
		
header ("Location: ../");

?>